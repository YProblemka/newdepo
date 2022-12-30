<?php

namespace App\Mail;

use App\Models\News;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public News $news;
    public string $hashKey;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(News $news, string $hashKey)
    {
        $this->news = $news;
        $this->hashKey = $hashKey;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.news')->subject(sprintf("Новая новость на сайте: %s", $this->news->title));
    }
}
