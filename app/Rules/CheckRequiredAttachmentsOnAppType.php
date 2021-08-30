<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckRequiredAttachmentsOnAppType implements Rule
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
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');
        $userAttachmentRepository = resolve('App\Repositories\Interfaces\UserAttachmentRepositoryInterface');
        $appAttachmentRepository = resolve('App\Repositories\Interfaces\AppAttachmentRepositoryInterface');

        $requiredConfigAttachmentsOnAppType = $configAppTypeAttachmentRepository->getRequiredAppTypeConfigAttachments($this->appTypeId);

        if($requiredConfigAttachmentsOnAppType->isEmpty()) {
            return true;
        }

        $configAttachmentsFromRequest = array_column($this->data['app_attachments'], 'config_attachment_id');

        if($this->applicationId > 0) {
            $appAttachments = $appAttachmentRepository->getAllAppAttachments($this->applicationId)->pluck('config_attachment_id')->toArray();
            $requiredAttachments = $requiredConfigAttachmentsOnAppType->pluck('config_attachment_id')->toArray();

            $commonConfigAttachmentIds = array_intersect($appAttachments, $requiredAttachments);

            return count($commonConfigAttachmentIds) == count($requiredAttachments) ? true : false;
        } else {
            foreach($requiredConfigAttachmentsOnAppType as $requiredConfigAttachmentOnAppType) {
                $key = array_search($requiredConfigAttachmentOnAppType->config_attachment_id, $configAttachmentsFromRequest);
                if(
                    (
                        $key === false
                        && !$userAttachmentRepository->attachmentGiven($requiredConfigAttachmentOnAppType->config_attachment_id, auth()->user()->id)
                    )
                    ||
                    (
                        $key !== false
                        && empty($this->data['app_attachments'][$key]['attachment'])
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
