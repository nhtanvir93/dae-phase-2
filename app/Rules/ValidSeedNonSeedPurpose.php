<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class ValidSeedNonSeedPurpose implements Rule
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function passes($attribute, $value)
    {
        $productCategoryRepository = resolve('App\Repositories\Interfaces\ProductCategoryRepositoryInterface');
        $seedPurposeRepository = resolve('App\Repositories\Interfaces\SeedPurposeRepositoryInterface');

        if(!$this->data['product_category_id']) {
            return true;
        }

        $purposeId = $value;
        $productCategory = $productCategoryRepository->getDetails($this->data['product_category_id']);

        if(empty($productCategory)) {
            return true;
        }

        return $seedPurposeRepository->isValidSeedPurpose($productCategory->is_seed, $purposeId);
    }

    public function message()
    {
        return 'Invalid purpose (according to : product category)';
    }
}
