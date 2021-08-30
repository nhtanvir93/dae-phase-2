<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidIpsForRo implements Rule
{
    private $data;
    private $applicationId;
    private $applicantId;

    public function __construct($data, $applicationId, $applicantId)
    {
        $this->data = $data;
        $this->applicationId = $applicationId;
        $this->applicantId = $applicantId;
    }

    public function passes($attribute, $value)
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        if($this->applicationId == 0 && $this->data['application_ids']->count() == 0) {
            return false;
        }

        if($this->applicationId > 0) {
            return true;
        }

        $availableProductInfo = $applicationRepository->getAvailableProductsInfo($this->applicantId, true);

        if(empty($availableProductInfo['ip_applications'])) {
            return false;
        }

        $approvedIpApplicationIds = array_column($availableProductInfo['ip_applications'],'id');

        $givenIpApplicationIds = $this->data['application_ids']->toArray();

        $validIpApplicationIds = array_intersect($approvedIpApplicationIds, $givenIpApplicationIds);

        if(count($validIpApplicationIds) != $this->data['application_ids']->count()) {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'Invalid certificate no/s';
    }
}
