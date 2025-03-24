<?php 
namespace App\Listeners;

use App\Models\SepayTransaction; 
use SePay\SePay\Events\SePayWebhookEvent;

class SePayWebhookListener
{
    public function handle(SePayWebhookEvent $event)
    {
        $data = $event->sePayWebhookData;

        // Tìm giao dịch dựa trên nội dung
        $transaction = SepayTransaction::where('content', $data->content)->first();

        if ($transaction) {
            if ($data->transferType === 'in') {
                $transaction->update(['status' => 'success']);
            } else {
                $transaction->update(['status' => 'failed']);
            }
        }
    }
}