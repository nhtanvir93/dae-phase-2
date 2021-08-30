<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckCnFAssignmentValidity implements Rule
{
    private $applicationId;

    public function __construct($applicationId)
    {
        $this->applicationId = $applicationId;
    }

    public function passes($attribute, $value)
    {
        if(!$this->applicationId || !$value) {
            return true;
        }

        $cnfIpAssignmentRepository = resolve('App\Repositories\Interfaces\CnfIpAssignmentRepositoryInterface');

        return $cnfIpAssignmentRepository->isAssignmentPossible($this->applicationId, $value);
    }

    public function message()
    {
        return 'C&f is already assigned to this application';
    }
}
