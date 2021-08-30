<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckIpApprovedApplicationValidity implements Rule
{
    public function passes($attribute, $value)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        return $applicationRepository->CheckIpApprovedApplicationValidity($value);
    }

    public function message()
    {
        return 'Either application is not approved or validity date is over';
    }
}
