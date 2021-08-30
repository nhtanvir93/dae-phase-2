<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidPhoto implements Rule
{
    public function passes($attribute, $file)
    {
        list($width, $height) = getimagesize($file->path());

        return $width == 193 && $height == 193;
    }

    public function message()
    {
        return 'Photo should be : 193x193 (width x height)';
    }
}
