<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckActiveProcessFlowConfig implements Rule
{
    private $applicationId;
    private $appTypeId;
    private $message;

    public function __construct($applicationId, $appTypeId)
    {
        $this->applicationId = $applicationId;
        $this->appTypeId = $appTypeId;
    }

    public function passes($attribute, $organizationId)
    {
        if($this->appTypeId == 0 || !$organizationId) {
            return true;
        }

        $appProductRepository = resolve('App\Repositories\Interfaces\AppProductRepositoryInterface');
        $processFlowRepository = resolve('App\Services\ProcessFlowService');

        $hasRestrictProduct = $appProductRepository->hasRestrictedProduct($this->applicationId);
        $response = $processFlowRepository->getProcessFlowDetails($organizationId, $this->appTypeId);

        if(!$response['success']) {
            $this->message = $response['message'];
            return false;
        }

        $processFlowDetails = $response['data']['process_flow_details'];

        if($hasRestrictProduct) {
            $this->message = !$processFlowDetails['restricted']['restricted_product'] ? 'No process flow config found' :
                (!$processFlowDetails['restricted']['can_apply'] ? 'No user found to forward the application' : '');
            return $processFlowDetails['restricted']['can_apply'];
        } else {
            $this->message = !$processFlowDetails['regular']['regular_product'] ? 'No process flow config found' :
                (!$processFlowDetails['regular']['can_apply'] ? 'No user found to forward the application' : '');
            return $processFlowDetails['regular']['can_apply'];
        }
    }

    public function message()
    {
        return $this->message;
    }
}
