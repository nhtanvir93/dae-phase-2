<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppWiseAttachmentSortRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getConfigAttachmentString($configAppTypeAttachments) {
        $configAttachmentString = '';

        foreach($configAppTypeAttachments as $configAppTypeAttachment) {
            $configAttachmentString .= $configAppTypeAttachment->config_attachment_id . ',';
        }

        return $configAttachmentString;
    }

    public function rules()
    {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');
        $configAppTypeAttachments = $configAppTypeAttachmentRepository->getAppTypeConfigAttachments(request()->get('app_type_id'));

        $total = $configAppTypeAttachments->count();
        $configAttachmentString = $this->getConfigAttachmentString($configAppTypeAttachments);
        $configAttachmentString = substr($configAttachmentString,0,strlen($configAttachmentString) - 1);

        return [
            'app_type_id' => 'required|exists:app_types,id',
            'config_attachments' => "required|array|size:$total",
            'config_attachments.*' => "in:$configAttachmentString"
        ];
    }

    public function attributes(){

        return [
            'app_type_id' => 'application type',
            'config_attachments' => 'configuration attachments'
        ];
    }
}
