<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckRequiredAttachmentsOnPurpose implements Rule
{
    private $data;
    private $appTypeId;
    private $applicationId;

    public function __construct($data, $appTypeId, $applicationId)
    {
        $this->data = $data;
        $this->appTypeId = $appTypeId;
        $this->applicationId = $applicationId;
    }

    public function passes($attribute, $value)
    {
        $purposeRequiredAttachmentRepository = resolve('App\Repositories\Interfaces\PurposeRequiredAttachmentRepositoryInterface');
        $userAttachmentRepository = resolve('App\Repositories\Interfaces\UserAttachmentRepositoryInterface');
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');

        if(!$this->data['purpose_id']) {
            return true;
        }

        $requiredConfigAttachmentsOnPurpose = $purposeRequiredAttachmentRepository->getAppTypeAndPurposeWise($this->appTypeId, $this->data['purpose_id']);

        if($requiredConfigAttachmentsOnPurpose->isEmpty()) {
            return true;
        }

        $appAttachments = $value;
        $configAttachmentsFromRequest = array_column($appAttachments, 'config_attachment_id');

        if($this->applicationId > 0) {
            $appAttachments = $appAttachmentRepository->getAllAppAttachments($this->applicationId)->pluck('config_attachment_id')->toArray();
            $requiredAttachments = $requiredConfigAttachmentsOnPurpose->pluck('config_attachment_id')->toArray();

            $commonConfigAttachmentIds = array_intersect($appAttachments, $requiredAttachments);

            return count($commonConfigAttachmentIds) == count($requiredAttachments) ? true : false;
        } else {
            foreach($requiredConfigAttachmentsOnPurpose as $requiredConfigAttachmentOnPurpose) {
                $key = array_search($requiredConfigAttachmentOnPurpose->config_attachment_id, $configAttachmentsFromRequest);
                if(
                    (
                        $key === false
                        && !$userAttachmentRepository->attachmentGiven($requiredConfigAttachmentOnPurpose->config_attachment_id, auth()->user()->id)
                    )
                    ||
                    (
                        $key !== false
                        && empty($appAttachments[$key]['attachment'])
                    )
                ) {
                    return false;
                }
            }
        }

        return true;
    }

    public function message()
    {
        return 'All or some required attachments are missing';
    }
}
