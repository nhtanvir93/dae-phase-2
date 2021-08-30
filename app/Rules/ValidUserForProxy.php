<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidUserForProxy implements Rule
{
    public function passes($attribute, $value)
    {
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        return $userRepository->validUserForProxy($value);
    }

    public function message()
    {
        return 'Invalid user for proxy setup';
    }
}
