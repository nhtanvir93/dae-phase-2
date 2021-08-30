<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidProductsForRo implements Rule
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

        $this->applicantId = isset($this->applicantId) ? $this->applicantId  : auth()->user()->id;

        if($this->applicationId == 0 && $this->data['application_ids']->count() == 0) {
            return true;
        }

        $availableProductInfo = $applicationRepository->getAvailableProductsInfo($this->applicantId, true, [$this->applicationId]);

        if(empty($availableProductInfo['ip_applications'])) {
            return true;
        }

        if(count($this->data['app_products']) == 0) {
            return false;
        }

        $approvedIpApplicationIds = array_column($availableProductInfo['ip_applications'],'id');

        $givenIpApplicationIds = $this->data['application_ids']->toArray();

        $validIpApplicationIds = array_intersect($approvedIpApplicationIds, $givenIpApplicationIds);

        if(count($validIpApplicationIds) != $this->data['application_ids']->count()) {
            return true;
        }

        $products = $availableProductInfo['products'];

        foreach($this->data['app_products'] as $appProduct) {
            $productId = isset($appProduct['product_id']) && $appProduct['product_id'] > 0
                ? $appProduct['product_id'] : $appProduct['product_name'];

            $key = array_search($productId, array_column($products,'id'));

            if($key >= 0 && $appProduct['quantity'] > $products[$key]['available_quantity']) {
                return false;
            } elseif ($key === false) {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Invalid products or quantity given';
    }
}
