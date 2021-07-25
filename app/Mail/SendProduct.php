<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendProduct extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * @param $subject
     * @param $body
     * @return void
     */
    public function __construct($subject, $body = null)
    {
        //
        $this->subject = 'Advertencia. ' . $subject;
        $this->body = $body;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   
        $mail = $this->view('view.SendProduct')
            ->With(['line' => $this->body])
            ->from(config('mail.from.address'), config('mail.from.name'))
            ->subject($this->subject);

        return $mail;
    }
}
