<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EmptyAppProduct implements Rule
{
    public function passes($attribute, $value)
    {
        $appProducts = $value;

        foreach($appProducts as $appProduct) {
            if(
                empty($appProduct['product_id']) && empty($appProduct['product_name'])
                ||
                    (
                        isset($appProduct['product_id']) && isset($appProduct['product_name'])
                        && !$appProduct['product_id'] && !$appProduct['product_name']
                    )
                )
            {
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Required product info missing for some products';
    }
}
