<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidAppTypeAttachment;

class ConfigAttachmentUpdateRequiredFieldRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'app_type_id' => 'required|exists:app_types,id',
            'config_attachments' => 'required|array|min:1',
            'config_attachments.*' => [new ValidAppTypeAttachment(request()->all())]
        ];
    }

    public function attributes(){

        return [
            'app_type_id' => 'application type',
            'config_attachments' => 'configuration attachments'
        ];
    }
}
