<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class BanglaName implements Rule
{
    public function __construct()
    {

    }

    public function passes($attribute, $value)
    {
        $banglaFonts = '(?:\x{0985}-\x{098b})(?:\x{098f}-\x{0994})(?:\x{0995}-\x{09df})';
        $pattern = "#^(?:[$banglaFonts]+\.*\,*\s+)*[$banglaFonts]+$#u";
        return preg_match($pattern,$value);
    }

    public function message()
    {
        return "Invalid bangla font given";
    }
}
