<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OldPasswordCheck implements Rule
{
    private $userId;

    public function passes($attribute, $password)
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        return $userRepository->isValidUser($this->userId, $password);
    }

    public function message()
    {
        return 'Invalid old password';
    }
}
