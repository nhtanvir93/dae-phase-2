<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckRequiredUserAttachmentGiven;

class UserAttachmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getConfigAttachmentString($configAttachments) {
        $configAttachmentString = '';

        foreach($configAttachments as $configAttachment) {
            $configAttachmentString .= $configAttachment->id . ',';
        }

        return substr($configAttachmentString,0,strlen($configAttachmentString) - 1);
    }

    public function rules()
    {
        $configAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentRepositoryInterface');
        $missingConfigAttachments = $configAttachmentRepository->getMissingAttachments(auth()->user()->id);
        $profileConfigAttachments = $configAttachmentRepository->getProfileEligible();

        $configAttachmentString = $this->getConfigAttachmentString($profileConfigAttachments);

        $min = $missingConfigAttachments->count();
        $max = $profileConfigAttachments->count();

        if($min == $max) {
            return [
                'userAttachments' => ['required', 'array', "size:$min",
                    new CheckRequiredUserAttachmentGiven($missingConfigAttachments, request()->get('userAttachments'))],
                'userAttachments.*.config_attachment_id' => ['required', 'distinct', "in:$configAttachmentString"],
                'userAttachments.*.attachment' => ['required', 'mimes:jpg,jpeg,png,pdf', 'max:1000']
            ];
        } elseif($min == 0) {
            return [
                'userAttachments' => ['required', 'array', 'min:1', "max:$max",
                    new CheckRequiredUserAttachmentGiven($missingConfigAttachments, request()->get('userAttachments'))],
                'userAttachments.*.config_attachment_id' => ['required', 'distinct', "in:$configAttachmentString"],
                'userAttachments.*.attachment' => ['required', 'mimes:jpg,jpeg,png,pdf', 'max:1000']
            ];
        } else {
            return [
                'userAttachments' => ['required', 'array', "min:$min", "max:$max",
                    new CheckRequiredUserAttachmentGiven($missingConfigAttachments, request()->get('userAttachments'))],
                'userAttachments.*.config_attachment_id' => ['required', 'distinct', "in:$configAttachmentString"],
                'userAttachments.*.attachment' => ['required', 'mimes:jpg,jpeg,png,pdf', 'max:1000']
            ];
        }
    }

    public function attributes(){

        return [
            'userAttachments.*.config_attachment_id' => 'configuration attachment',
            'userAttachments.*.attachment' => 'attachment'
        ];
    }
}
