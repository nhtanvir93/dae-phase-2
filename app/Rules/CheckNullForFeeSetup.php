<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckNullForFeeSetup implements Rule
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function passes($attribute, $value)
    {
        if(isset($this->data['has_infinity_to']) && $this->data['has_infinity_to'] == 1 && $value != null)  {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'This field value should be null when `has infinity to` is set true';
    }
}
