<?php

namespace App\Listeners;

use App\Events\NewsSavingEvent;
use App\Mail\NewsMail;
use App\Models\SubscribeNewsletter;
use Illuminate\Support\Facades\Mail;

class NewsSavingListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param NewsSavingEvent $event
     * @return void
     */
    public function handle(NewsSavingEvent $event): void
    {
        $subscribers = SubscribeNewsletter::query()->where('is_verified', true)->get();
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsMail($event->news, $subscriber->getHashKey()));
        }
    }
}
