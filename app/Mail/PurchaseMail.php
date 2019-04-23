<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PurchaseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public $purchaseData;

    public function __construct($user, $orders)
    {
        $this->user = $user;
        $this->purchaseData = $orders;
        //$this->detailText = $request->input('detailText');
    }

    public function build()
    {
        return $this->view('email.purchase');
    }
}
