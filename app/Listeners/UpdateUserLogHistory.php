<?php

namespace App\Listeners;

class UpdateUserLogHistory
{
    public function handle($event)
    {
        $userLogRepository = resolve('App\Repositories\Interfaces\UserLogRepositoryInterface');

        $userLogRepository->updateLogoutTime($event->userId, $event->hasLeftChannelManually);
    }
}
