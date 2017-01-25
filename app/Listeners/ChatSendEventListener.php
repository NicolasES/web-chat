<?php

namespace App\Listeners;

use App\Events\ChatSendEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChatSendEventListener
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
     * @param  ChatSendEvent  $event
     * @return void
     */
    public function handle(ChatSendEvent $event)
    {
        //
    }
}
