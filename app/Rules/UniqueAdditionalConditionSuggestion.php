<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UniqueAdditionalConditionSuggestion implements Rule
{
    private $data;
    private $exceptId;

    public function __construct($exceptId, $data)
    {
        $this->exceptId = $exceptId;
        $this->data = $data;
    }

    public function passes($attribute, $value)
    {
        $appTypeId = isset($this->data['app_type_id']) ? $this->data['app_type_id'] : 0;
        $productTypeId = isset($this->data['product_type_id']) ? $this->data['product_type_id'] : 0;
        $productId = isset($this->data['product_id']) ? $this->data['product_id'] : 0;
        $isActive = isset($this->data['is_active']) ? $this->data['is_active'] : 0;

        if($appTypeId == 0 || $productTypeId == 0 || $productId == 0) {
            return true;
        }

        if(!$isActive) return true;

        $additionalConditionSuggestionRepository = resolve('App\Repositories\Interfaces\AdditionalConditionSuggestionRepositoryInterface');

        return !$additionalConditionSuggestionRepository->hasActiveSuggestion($appTypeId, $productTypeId, $productId, $this->exceptId);

    }

    public function message()
    {
        return 'Duplicate active suggestion (according to : app type, product type and product)';
    }
}
