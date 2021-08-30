<?php

namespace App\Observers;

use App\Models\Profile;

class ProfileObserver
{
    public function created(Profile $profile)
    {
    }

    public function updated(Profile $profile)
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $userRepository->checkAndUpdateIsProfileCompletedColumn($profile->user_id);
    }

    public function deleted(Profile $profile)
    {
        //
    }

    public function restored(Profile $profile)
    {
        //
    }

    public function forceDeleted(Profile $profile)
    {
        //
    }
}
