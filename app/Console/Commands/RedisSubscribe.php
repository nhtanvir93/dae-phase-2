<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;
use App\Events\UserLoggedout;

class RedisSubscribe extends Command
{
    protected $signature = 'redis:subscribe';

    protected $description = 'Subscribe to a Redis channel';

    public function handle()
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');
        $userLogRepository = resolve('App\Repositories\Interfaces\UserLogRepositoryInterface');

        Redis::subscribe(['PresenceChannelUpdated'], function ($data) use ($userRepository, $userLogRepository) {
            $data = json_decode($data);
            $channel = $data->event->channel;

            $notificationChannelPattern = '#^[^\s]+notifications.\d+:members$#i';

            if(preg_match($notificationChannelPattern, $channel)) {
                $temp = explode('.', $channel);

                $userId = explode(':', $temp[1])[0];
                $user = $userRepository->getDetails($userId);

                auth()->login($user);

                if(count($data->event->members) == 0) {
                    UserLoggedout::dispatch($userId);
                } else {
                    $userLogRepository->updateInvalidLogoutTime($userId);
                }
            }
        });
    }
}