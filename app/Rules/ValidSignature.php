<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidSignature implements Rule
{
    public function passes($attribute, $file)
    {
        list($width, $height) = getimagesize($file->path());

        return $width == 300 && $height == 80;
    }

    public function message()
    {
        return 'Signature should be : 300x80 (width x height)';
    }
}
