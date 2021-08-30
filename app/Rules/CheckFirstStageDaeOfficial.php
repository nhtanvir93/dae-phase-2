<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckFirstStageDaeOfficial implements Rule
{
    private $applicationId;

    public function __construct($applicationId)
    {
        $this->applicationId = $applicationId;
    }

    public function passes($attribute, $value)
    {
        if($this->applicationId == 0 || !$value) {
            return true;
        }

        $processFlowRepository = resolve('App\Repositories\Interfaces\ProcessFlowRepositoryInterface');
        $processStageRoleRepository = resolve('App\Repositories\Interfaces\ProcessStageRoleRepositoryInterface');
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $application = $applicationRepository->getDetails($this->applicationId);

        $processFlow = $processFlowRepository->getActiveProcessFlow($application->app_type_id, $value);

        if(!$processFlow) {
            return true;
        }

        $processStageRoles = $processStageRoleRepository->getAllRoleDetails($processFlow->id, 0);

        if(!$processStageRoles) {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'No dae official is found to forward the application';
    }
}
