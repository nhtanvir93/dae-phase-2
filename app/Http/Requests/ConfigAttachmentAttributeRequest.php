<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;

class ConfigAttachmentAttributeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');
        $configAttachmentAttribute = $configAttachmentAttributeRepository->getDetails($this->route('config_attachment_attribute'));

        $configAttachmentAttributeId = $configAttachmentAttribute ? $configAttachmentAttribute->id : 0;

        return [
            'name' => ['required', "unique:config_attachment_attributes,name,$configAttachmentAttributeId,id,deleted_at,NULL", 'max:150', new EnglishName],
            'config_attachment_id' => 'required|exists:config_attachments,id|max:150',
            'type' => 'required|in:DATE,NUMBER,TEXT,LONG_TEXT',
            'label' => ['nullable', 'max:150', new EnglishName],
            'is_mandatory' => 'required|in:0,1',
            'input_field_name' => 'nullable|regex:/^[\w\.]+$/i|max:150'
        ];
    }
}
