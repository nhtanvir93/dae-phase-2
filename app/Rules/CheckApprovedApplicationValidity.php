<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckApprovedApplicationValidity implements Rule
{
    public function passes($attribute, $value)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        return $applicationRepository->checkApprovedApplicationValidity($value);
    }

    public function message()
    {
        return 'Either application is not approved or validity date is over';
    }
}
