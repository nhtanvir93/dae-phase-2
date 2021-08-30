<?php

namespace App\Http\Controllers\API\V1;

use App\Events\NewChatMessageReceived;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function broadcastMessage(Request $request) {
        $message = [
            'username' => auth()->user()->username,
            'content' => $request->message,
            'time' => now()->toDayDateTimeString()
        ];

        broadcast(new NewChatMessageReceived($message))->toOthers();

        return response()->json($message);
    }
}
