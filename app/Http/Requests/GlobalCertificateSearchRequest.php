<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidRecaptcha;

class GlobalCertificateSearchRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'app_type_id' => 'required|exists:app_types,id,deleted_at,NULL',
            'certificate_no' => 'required',
            'g_recaptcha_response' => ['required', new ValidRecaptcha]
        ];
    }

    public function attributes()
    {
        return [
            'app_type_id' => 'app type',
            'g_recaptcha_response' => 'recaptcha'
        ];
    }
}
