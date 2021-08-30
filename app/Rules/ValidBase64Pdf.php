<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidBase64Pdf implements Rule
{
    public function passes($attribute, $base64File)
    {
        $pdfPattern = '#^data:application/pdf;base64,#i';

        if (preg_match($pdfPattern, $base64File)) {
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'Invalid pdf(base64 encoded)';
    }
}
