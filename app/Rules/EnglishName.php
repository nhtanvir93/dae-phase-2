<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class EnglishName implements Rule
{
    public function passes($attribute, $value)
    {
        $pattern = '#(?:[a-z]+\.*\s+)*[a-z]+\.*#i';
        return preg_match($pattern,$value);
    }

    public function message()
    {
        return 'Invalid english font given';
    }
}
