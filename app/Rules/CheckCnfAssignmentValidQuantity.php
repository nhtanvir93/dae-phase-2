<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckCnfAssignmentValidQuantity implements Rule
{
    private $applicationId;

    public function __construct($applicationId)
    {
        $this->applicationId = $applicationId;
    }

    public function passes($attribute, $cnfIpAssignmentDetails)
    {
        if(!$this->applicationId || count($cnfIpAssignmentDetails) == 0) {
            return true;
        }

        $cnfIpAssignmentService = resolve('App\Services\CnfIpAssignmentService');

        $appProducts = $cnfIpAssignmentService->getAvailableProductInfo($this->applicationId);

        if(!$appProducts) {
            return false;
        }

        foreach($cnfIpAssignmentDetails as $cnfIpAssignmentDetail) {
            if(!isset($cnfIpAssignmentDetail['app_product_id'])) {
                dump('invalid app_product_id value');
                return false;
            }

            $index = array_search($cnfIpAssignmentDetail['app_product_id'], array_column($appProducts, 'id'));

            if($index === false) {
                return false;
            }

            if($cnfIpAssignmentDetail['quantity'] > $appProducts[$index]['available_quantity']) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Invalid available product quantity given';
    }
}
