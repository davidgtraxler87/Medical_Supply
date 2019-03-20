<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/19/2019
 * Time: 7:13 PM
 */

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class ResponseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $detailText;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->name = $request->input('name');
        $this->email = $request->input('email');
        $this->subject = $request->input('subject');
        $this->detailText = $request->input('detailText');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.response');
    }
}
