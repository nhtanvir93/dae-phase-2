<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Repositories\Interfaces\FeeSetupRepositoryInterface;

class DuplicateFeeSetupCheck implements Rule
{
    private $data = [];

    public function __construct($requestData)
    {
        $this->data = $requestData;
    }

    public function passes($attribute, $value)
    {
        $feeSetupRepository = resolve('App\Repositories\Interfaces\FeeSetupRepositoryInterface');

        $id = request()->route('fee_setup') ?? 0;
        $quantityTo = request()->get('quantity_to', null);
        $hasInfinityTo = request()->get('has_infinity_to', 0);

        if(isset($this->data['app_type_id']) && isset($this->data['product_type_id'])
        && isset($this->data['quantity_from'])) {
            return !$feeSetupRepository->isDuplicate($id, $this->data['app_type_id'], $this->data['product_type_id'],
                $this->data['quantity_from'], $quantityTo, $hasInfinityTo);
        }

        return true;
    }

    public function message()
    {
        return 'Duplicate fee setup (according to : app type, product type, quantity from, quantity to)';
    }
}
