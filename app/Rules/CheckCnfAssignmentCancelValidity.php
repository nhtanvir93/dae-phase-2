<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckCnfAssignmentCancelValidity implements Rule
{
    public function passes($attribute, $value)
    {
        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        return $cnfIpAssignmentRepository->hasCancelAbility($value);
    }

    public function message()
    {
        return 'C&F assignment can not be cancelled because applied ro against this assignment is paid or approved';
    }
}
