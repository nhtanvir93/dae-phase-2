<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ConflictFeeSetupCheck implements Rule
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
        $quantityTo = isset($this->data['quantity_to']) ? $this->data['quantity_to'] : null;

        if(isset($this->data['app_type_id']) && isset($this->data['product_type_id'])
            && isset($this->data['quantity_from'])) {
            return !$feeSetupRepository->doesConflictFeeSetupExists($id, $this->data['app_type_id'], $this->data['product_type_id'],
                $this->data['quantity_from'], $quantityTo);
        }

        return true;
    }

    public function message()
    {
        return 'From or to quantity or both conflict previous fee setups';
    }
}
