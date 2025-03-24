<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\SepayTransaction;
use App\Models\Transaction;
use Illuminate\Http\Request;
use SePay\SePay\Facades\SePay; // Sử dụng facade của SePay

use Google_Client;
use Google_Service_Drive;
use Google_Service_Drive_Permission;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentSuccessMail;

class PaymentController extends Controller
{


    public function paymentFailed()
    {
        // Hiển thị trang thông báo lỗi nếu thanh toán thất bại hoặc không hợp lệ
        return view('client.contents.payment.failed');
    }


    public function createPayment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);

        session()->put('user_info', [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $amount = session('cart.price_sale') == 0 ? session('cart.price') : session('cart.price_sale');
        $content = 'SE' . rand(100000, 999999) . ' ' . 'hocngaygiare';
        $account_number = 43481257;

        do {
            $transactionID = rand(10000000, 99999999);
        } while (SepayTransaction::where('transactionID', $transactionID)->exists());

        $transaction = SepayTransaction::create([
            'transactionID' => $transactionID,
            'gateway' => 'ACB',
            'transactionDate' => now()->toDateTimeString(),
            'accountNumber' => $account_number,
            'content' => $content,
            'transferType' => 'in',
            'transferAmount' => $amount,
            'referenceCode' => null,
            'status' => 'Pending', // Thêm trạng thái mặc định
        ]);

        session()->put('transaction', [
            'transactionID' => $transaction->transactionID,
            'gateway' => $transaction->gateway,
            'transactionDate' => $transaction->transactionDate,
            'accountNumber' => $transaction->accountNumber,
            'content' => $transaction->content,
            'transferAmount' => $transaction->transferAmount,
        ]);

        return redirect()->route('payment.pending');
    }

    public function paymentPending()
    {
        $user_info = session('user_info');
        $transactionSession = session('transaction');
        $productSession = session('cart');
        return view('client.contents.payment.qrcode', compact('user_info', 'productSession', 'transactionSession'));
    }

    // public function paymentSuccess(Request $request)
    // {
    //     $transactionID = $request->session()->get('transaction.transactionID');
    //     if (!$transactionID) {
    //         $transactionID = $request->query('transactionId');
    //         if (!$transactionID) {
    //             return redirect()->route('payment.failed')->with('error', 'Không tìm thấy ID giao dịch.');
    //         }
    //     }

    //     $transaction = SepayTransaction::where('transactionID', $transactionID)->first();
    //     if (!$transaction || $transaction->status !== 'success') {
    //         return redirect()->route('payment.failed')->with('error', 'Giao dịch không hợp lệ hoặc chưa thành công.');
    //     }


    //     Order::create([
    //         'name' => session('cart.name'),
    //         'email' => session('user_info.email'),
    //         'total' => session('transaction.transferAmount'),
    //         'order_id' => session('transaction.transactionID'),
    //     ]);





    //     return view('client.contents.payment.success', compact('transaction'));
    // }


    public function paymentSuccess(Request $request)
    {
        $transactionID = $request->session()->get('transaction.transactionID');
        if (!$transactionID) {
            $transactionID = $request->query('transactionId');
            if (!$transactionID) {
                return redirect()->route('payment.failed')->with('error', 'Không tìm thấy ID giao dịch.');
            }
        }

        $transaction = SepayTransaction::where('transactionID', $transactionID)->first();
        if (!$transaction || $transaction->status !== 'success') {
            return redirect()->route('payment.failed')->with('error', 'Giao dịch không hợp lệ hoặc chưa thành công.');
        }


        Order::create([
            'name' => session('cart.name'),
            'email' => session('user_info.email'),
            'total' => session('transaction.transferAmount'),
            'order_id' => session('transaction.transactionID'),
        ]);



        $email = session('user_info.email');
        $folderId = session('cart.folder_url'); // Lấy folderId từ session 

        $productName = session('cart.name'); // Giả sử tên sản phẩm nằm trong session('cart.name')
        $total = session('transaction.transferAmount'); // Tổng tiền

        // Thiết lập Google Client (không lưu vào session)
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('app/sinuous-ally-454015-v8-a32a4f3afbba.json'));
        $client->addScope(Google_Service_Drive::DRIVE);
        $service = new Google_Service_Drive($client);

        try {
            // Kiểm tra xem folderId có tồn tại không
            if (!$folderId) {
                // \Log::warning('Không tìm thấy ID thư mục trong session.');
                // Bỏ qua lỗi và tiếp tục
            } else {
                // Kiểm tra xem folderId có phải là thư mục hợp lệ không
                $file = $service->files->get($folderId, ['fields' => 'id, name, mimeType']);
                if ($file->mimeType !== 'application/vnd.google-apps.folder') {
                    // \Log::warning('ID ' . $folderId . ' không phải là một thư mục hợp lệ.');
                    // Bỏ qua lỗi và tiếp tục
                } else {
                    // Kiểm tra quyền hiện tại
                    $permissions = $service->permissions->listPermissions($folderId);
                    $existingPermission = collect($permissions->getPermissions())->firstWhere('emailAddress', $email);

                    if ($existingPermission) {
                        // \Log::info('Email ' . $email . ' đã có quyền truy cập.');
                        // Bỏ qua lỗi và tiếp tục
                    } else {
                        // Tạo và thêm quyền mới
                        $permission = new Google_Service_Drive_Permission([
                            'type' => 'user',
                            'role' => 'reader',
                            'emailAddress' => $email
                        ]);

                        $service->permissions->create($folderId, $permission, ['fields' => 'id']);
                    }
                }
            }
            // Gửi email thông báo
            Mail::to($email)->send(new PaymentSuccessMail($transaction, $productName, $total));
            // Luôn trả về thông báo thành công, bất kể kết quả
            return view('client.contents.payment.success', compact('transaction'));
        } catch (\Google_Service_Exception $e) {
            // \Log::error('Lỗi Google API: ' . $e->getMessage());
            // Ghi log lỗi nhưng không dừng, tiếp tục trả về thông báo thành công
            Mail::to($email)->send(new PaymentSuccessMail($transaction, $productName, $total));
            return view('client.contents.payment.success', compact('transaction'));
        } catch (\Exception $e) {
            // \Log::error('Lỗi khác: ' . $e->getMessage());
            // Ghi log lỗi nhưng không dừng, tiếp tục trả về thông báo thành công
            Mail::to($email)->send(new PaymentSuccessMail($transaction, $productName, $total));
            return view('client.contents.payment.success', compact('transaction'));
        }
    }


    public function checkTransactionStatus(Request $request)
    {
        $transactionID = $request->query('transactionID');
        if (!$transactionID) {
            return response()->json(['error' => 'Transaction ID không hợp lệ'], 400);
        }

        $transaction = SepayTransaction::where('transactionID', $transactionID)->first();
        if (!$transaction) {
            return response()->json(['error' => 'Không tìm thấy giao dịch'], 404);
        }

        return response()->json(['status' => $transaction->status]);
    }
}
