<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidAppTypeAttachment;

class PurposeRequiredAttachmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'app_type_id' => 'required|exists:app_types,id',
            'purpose_id' => 'required|exists:config_purposes,id',
            'purpose_required_attachments' => 'required|array|min:1',
            'purpose_required_attachments.*' => [new ValidAppTypeAttachment(request()->all())]
        ];
    }

    public function attributes(){

        return [
            'app_type_id' => 'application type',
            'purpose_id' => 'purpose',
            'purpose_required_attachments' => 'configuration attachments'
        ];
    }
}
