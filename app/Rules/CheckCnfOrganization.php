<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckCnfOrganization implements Rule
{
    private $application;

    public function __construct($application)
    {
        $this->application = $application;
    }

    public function passes($attribute, $value)
    {
        if(!$this->application || !$value) {
            return true;
        }

        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $user = $userRepository->getDetails($value);

        if(!$user) {
            return false;
        }

        if(
            (
                $user->user_type_id != config('app_constants.user_type.cnf')
                && $user->company_type != config('app_constants.company_types.CNF')
            ) || !$user->is_active) {
            return false;
        }

        return $user->organization_id == $this->application->details->entry_organization_id;
    }

    public function message()
    {
        return 'Invalid C&F given or C&f\'s working port and applied application organization are not same';
    }
}
