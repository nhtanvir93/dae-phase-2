<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('test-chat', function ($user) {
    return true;
});

Broadcast::channel('notifications.{userId}', function ($user, $userId) {
    if($user->id == $userId) {
        return ['user' => $user];
    }

    return false;
});
