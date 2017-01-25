<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Events\ChatSendEvent;

class ChatController extends Controller
{
    public function send(Request $request)
    {
        $name = $request->name;
        $message = $request->message;
        event(new ChatSendEvent($name, $message));
    }
}
