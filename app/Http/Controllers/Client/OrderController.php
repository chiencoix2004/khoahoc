<?php
namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class OrderController extends Controller
{
    /**
     * Hiển thị form nhập số tiền.
     */
    public function showForm()
    {
        return view('client.contents.orders.order');
    }

    /**
     * Xử lý tạo đơn hàng và hiển thị mã QR.
     */
    public function createOrder(Request $request)
    {
        // Validate số tiền phải >= 1,000 VND
        $request->validate([
            'total' => 'required|numeric|min:1000',
        ]);

        // Lấy số tiền từ form
        $total = $request->input('total');
        $order_id = 'DH' . time(); // Tạo mã đơn hàng duy nhất

        // Lưu vào database
        Order::create([
            'id' => $order_id,
            'total' => $total,
            'status' => 'pending',
        ]);

        // Tạo mã QR Code cho thanh toán
        $qr_url = $this->generateQrCode($order_id, $total);

        // Trả về view hiển thị mã QR
        return view('client.contents.orders.qr', compact('order_id', 'total', 'qr_url'));
    }

    /**
     * Tạo URL QR Code cho thanh toán Sepay
     */
    private function generateQrCode($order_id, $total)
    {
        $account_number = "43481257"; // Thay bằng STK ngân hàng của bạn
        $bank = "ACB"; // Thay bằng ngân hàng bạn sử dụng (VD: ACB, BIDV, Vietcombank)
        $description = "khoahoccuatoi" . $order_id;

        // Tạo URL QR từ Sepay
        return "https://qr.sepay.vn/img?bank=$bank&acc=$account_number&template=compact&amount=$total&des=$description";
    }

    /**
     * Kiểm tra trạng thái đơn hàng
     */
    public function checkStatus(Request $request)
    {
        $order_id = $request->input('order_id');

        // Lấy đơn hàng từ database
        $order = Order::where('id', $order_id)->first();

        if (!$order) {
            return response()->json(['status' => 'not_found']);
        }

        return response()->json(['status' => $order->status]);
    }
}
