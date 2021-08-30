<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidAttachmentAttribute;

class AttachmentAttributeSortRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getConfigAttachmentAttributeString($configAttachmentAttributes) {
        $configAttachmentAttributeString = '';

        foreach($configAttachmentAttributes as $configAttachmentAttribute) {
            $configAttachmentAttributeString .= $configAttachmentAttribute->id . ',';
        }

        return $configAttachmentAttributeString;
    }

    public function rules()
    {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');
        $configAttachmentAttributes = $configAttachmentAttributeRepository->getConfigAttachmentAttributes(request()->get('config_attachment_id'));

        $total = $configAttachmentAttributes->count();
        $configAttachmentAttributeString = $this->getConfigAttachmentAttributeString($configAttachmentAttributes);
        $configAttachmentAttributeString = substr($configAttachmentAttributeString,0,strlen($configAttachmentAttributeString) - 1);

        return [
            'config_attachment_id' => 'required|exists:config_attachments,id',
            'attributes' => "required|array|size:$total",
            'attributes.*' => "in:$configAttachmentAttributeString"
        ];
    }

    public function attributes(){

        return [
            'config_attachment_id' => 'configuration attachment'
        ];
    }
}
