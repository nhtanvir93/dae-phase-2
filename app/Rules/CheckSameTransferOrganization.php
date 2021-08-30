<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckSameTransferOrganization implements Rule
{
    private $applicationId;

    public function __construct($applicationId)
    {
        $this->applicationId = $applicationId;
    }

    public function passes($attribute, $value)
    {
        if(!$value) {
            return true;
        }

        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $application = $applicationRepository->getDetails($this->applicationId);

        if($application->organization_id == $value) {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'Same organization given for transfer';
    }
}
