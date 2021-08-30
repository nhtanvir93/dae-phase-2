<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScrutinizeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getAppAttachmentString($appAttachments) {
        $appAttachmentString = '';

        foreach($appAttachments as $appAttachment) {
            $appAttachmentString .= $appAttachment->id . ',';
        }

        return $appAttachmentString;
    }

    public function rules()
    {
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');
        $appAttachments = $appAttachmentRepository->getAllAppAttachments(request()->get('application_id'));

        $total = $appAttachments->count();
        $appAttachmentString = $this->getAppAttachmentString($appAttachments);
        $appAttachmentString = substr($appAttachmentString,0,strlen($appAttachmentString) - 1);

        return [
            'application_id' => 'required|exists:applications,id,deleted_at,NULL',
            'app_attachments' => "required|array|size:$total",
            'app_attachments.*.id' => "required|in:$appAttachmentString|distinct",
            'app_attachments.*.is_valid' => "required|in:0,1"
        ];
    }
}
