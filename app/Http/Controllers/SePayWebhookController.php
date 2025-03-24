<?php

namespace App\Http\Controllers;

use App\Models\SepayTransaction;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SePayWebhookController extends Controller
{
    // public function handleWebhook(Request $request)
    // {

    //     $data = $request->all();

    //     // Kiểm tra header Authorization với định dạng Bearer
    //     $authorization = $request->header('Authorization');
    //     $token = $authorization ? trim(str_replace('Bearer Apikey ', '', $authorization)) : null;
    //     $expectedToken = config('sepay.webhook_token');

    //     if (!$token || $token !== $expectedToken) {
    //         return response()->json(['message' => 'Invalid authorization'], 400);
    //     }

    //     // Xử lý giao dịch
    //     if (!isset($data['content']) || !isset($data['transferType']) || !isset($data['transferAmount'])) {
    //         return response()->json(['message' => 'Invalid data'], 400);
    //     }

    //     // Trích xuất phần mã giao dịch từ content
    //     $content = $data['content'];
    //     preg_match('/SE\d{6}/', $content, $matches);
    //     $transactionCode = $matches[0] ?? null;

    //     if (!$transactionCode) {
    //         Log::error('Không thể trích xuất transaction code từ content', ['content' => $content]);
    //         return response()->json(['message' => 'Invalid content format'], 400);
    //     }

    //     // Tìm giao dịch trong database
    //     $transaction = SepayTransaction::where('content', $transactionCode)->first();
    //     if ($transaction) {
    //         $newStatus = $data['transferType'] === 'in' ? 'success' : 'failed';
    //         $transaction->update([
    //             'status' => $newStatus,
    //             'referenceCode' => $data['referenceCode'] ?? null,
    //         ]);
    //     } else {

    //         return response()->json(['message' => 'Transaction not found'], 404);
    //     }

    //     return response()->json(['status' => 'success']);
    // }

    // public function handleWebhook(Request $request)
    // {
    //     $data = $request->all();

    //     // Kiểm tra header Authorization với định dạng Bearer
    //     $authorization = $request->header('Authorization');
    //     $token = $authorization ? trim(str_replace('Bearer Apikey ', '', $authorization)) : null;
    //     $expectedToken = config('sepay.webhook_token');

    //     if (!$token || $token !== $expectedToken) {
    //         return response()->json(['message' => 'Invalid authorization'], 400);
    //     }

    //     // Xử lý giao dịch
    //     if (!isset($data['content']) || !isset($data['transferType']) || !isset($data['transferAmount'])) {
    //         return response()->json(['message' => 'Invalid data'], 400);
    //     }

    //     // Trích xuất phần mã giao dịch từ content (toàn bộ content)
    //     $content = $data['content'];
    //     preg_match('/SE\d{6}\s*hocngaygiare/', $content, $matches);
    //     $transactionContent = $matches[0] ?? $content; // Sử dụng toàn bộ content nếu không khớp chính xác

    //     // Tìm giao dịch trong database
    //     $transaction = SepayTransaction::where('content', $transactionContent)->first();

    //     if (!$transaction) {
    //         Log::error('Không tìm thấy giao dịch trong database', ['content' => $transactionContent, 'data' => $data]);
    //         return response()->json(['message' => 'Transaction not found'], 404);
    //     }

    //     // Cập nhật trạng thái và thông tin giao dịch
    //     $newStatus = $data['transferType'] === 'in' ? 'success' : 'failed';
    //     $transaction->update([
    //         'status' => $newStatus,
    //         'gateway' => $data['gateway'] ?? $transaction->gateway,
    //         'transactionDate' => $data['transactionDate'] ?? $transaction->transactionDate,
    //         'accountNumber' => $data['accountNumber'] ?? $transaction->accountNumber,
    //         'transferAmount' => $data['transferAmount'] ?? $transaction->transferAmount,
    //         'referenceCode' => $data['referenceCode'] ?? $transaction->referenceCode,
    //     ]);

    //     return response()->json(['status' => 'success', 'transactionId' => $transaction->transactionID]);
    // }

    public function handleWebhook(Request $request)
    {
        $data = $request->all();

        // Kiểm tra header Authorization với định dạng Bearer
        $authorization = $request->header('Authorization');
        $token = $authorization ? trim(str_replace('Bearer Apikey ', '', $authorization)) : null;
        $expectedToken = config('sepay.webhook_token');

        if (!$token || $token !== $expectedToken) {
            return response()->json(['message' => 'Invalid authorization'], 400);
        }

        // Xử lý giao dịch
        if (!isset($data['content']) || !isset($data['transferType']) || !isset($data['transferAmount'])) {
            return response()->json(['message' => 'Invalid data'], 400);
        }

        // Trích xuất phần mã giao dịch từ content (toàn bộ content)
        $content = $data['content'];
        preg_match('/SE\d{6}\s*hocngaygiare/', $content, $matches);
        $transactionContent = $matches[0] ?? $content;

        // Tìm giao dịch trong database
        $transaction = SepayTransaction::where('content', $transactionContent)->first();

        if (!$transaction) {
            Log::error('Không tìm thấy giao dịch trong database', ['content' => $transactionContent, 'data' => $data]);
            return response()->json(['message' => 'Transaction not found'], 404);
        }

        // Kiểm tra transferAmount từ webhook có khớp với CSDL không
        if ($data['transferAmount'] != $transaction->transferAmount) {
            Log::error('Số tiền không khớp với giao dịch trong CSDL', [
                'webhook_transferAmount' => $data['transferAmount'],
                'db_transferAmount' => $transaction->transferAmount,
                'transactionID' => $transaction->transactionID,
            ]);
            return response()->json(['message' => 'Transfer amount does not match'], 400);
        }

        // Cập nhật trạng thái và thông tin giao dịch
        $newStatus = $data['transferType'] === 'in' ? 'success' : 'failed';
        $transaction->update([
            'status' => $newStatus,
            'gateway' => $data['gateway'] ?? $transaction->gateway,
            'transactionDate' => $data['transactionDate'] ?? $transaction->transactionDate,
            'accountNumber' => $data['accountNumber'] ?? $transaction->accountNumber,
            'transferAmount' => $data['transferAmount'] ?? $transaction->transferAmount,
            'referenceCode' => $data['referenceCode'] ?? $transaction->referenceCode,
        ]);

        return response()->json(['status' => 'success', 'transactionId' => $transaction->transactionID]);
    }
}
