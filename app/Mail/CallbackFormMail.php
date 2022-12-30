<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CallbackFormMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public string $name;
    public string $email;
    public string $phone;
    public string $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $email, string $phone, string $comment)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.callback_form')->subject("Новая заявка обратной связи");
    }
}
