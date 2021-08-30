<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidBase64Pdf;

class DocumentSignerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'certificate' => [ 'required', new ValidBase64Pdf ]
        ];
    }
}
