<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ChatSendEvent extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $name;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name, $message)
    {
        $this->name = $name;
        $this->message = $message; 
    }

    public function broadcastAs()
    {
        return 'chat-event';
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['my-channel'];
    }
}
