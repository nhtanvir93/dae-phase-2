<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class ConfigAttachmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');
        $configAttachment = $configAttachmentRepository->getDetails($this->route('config_attachment'));

        $configAttachmentId = $configAttachment ? $configAttachment->id : 0;
        $isMandatoryForProfileValues = request()->get('is_profile_eligible', 0) == 0 ? '0' : '0,1';

        return [
            'name' => ['required', "unique:config_attachments,name,$configAttachmentId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'short_name' => ['required', "unique:config_attachments,short_name,$configAttachmentId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'display_label' => ['nullable', 'max:150', new EnglishName],
            'is_profile_eligible' => 'required|in:0,1',
            'is_mandatory_for_profile' => "required_if:is_profile_eligible,1|in:$isMandatoryForProfileValues",
            'app_types' => 'required|array|min:1',
            'app_types.*' => 'exists:app_types,id'
        ];
    }

    public function attributes(){
        return [
            'app_types' => 'application types'
        ];
    }
}
