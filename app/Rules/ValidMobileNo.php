<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidMobileNo implements Rule
{
    public function passes($attribute, $value)
    {
        $pattern = '#^01[1(?:3-9)]\d{8}$#';
        return preg_match($pattern,$value);
    }

    public function message()
    {
        return 'Invalid mobile number';
    }
}
