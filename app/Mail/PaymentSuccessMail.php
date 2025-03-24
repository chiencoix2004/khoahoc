<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels; 

class PaymentSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $transaction;
    public $productName;
    public $total;

    public function __construct($transaction, $productName, $total)
    {
        $this->transaction = $transaction;
        $this->productName = $productName;
        $this->total = $total;
    }

    public function build()
    {
        return $this->subject('Thanh Toán Thành Công')
                    ->view('client.contents.emails.infoordermail')
                    ->with([
                        'transactionID' => $this->transaction->transactionID,
                        'productName' => $this->productName,
                        'total' => $this->total,
                    ]);
    }
}