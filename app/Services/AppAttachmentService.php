<?php

namespace App\Services;

class AppAttachmentService
{
    private $appTypeId;
    private $userId;
    private $purposeId;

    public function  __construct($appTypeId,
                                 $userId,
                                 $purposeId = null)
    {
        $this->appTypeId = $appTypeId;
        $this->userId = $userId;
        $this->purposeId = $purposeId;
    }

    public function hasRequiredConfigAttachment() {
        if($this->purposeId == 0) {
            return false;
        }elseif($this->purposeId > 0) {
            return $this->hasRequiredConfigAttachmentsOnPurpose();
        } else {
            return $this->hasRequiredConfigAttachmentsOnAppType();
        }
    }

    public function hasRequiredConfigAttachmentsOnPurpose() {
        $userAttachmentRepository = resolve('App\Repositories\Interfaces\UserAttachmentRepositoryInterface');
        $purposeRequiredAttachmentRepository = resolve('App\Repositories\Interfaces\PurposeRequiredAttachmentRepositoryInterface');

        $requiredConfigAttachmentsOnPurpose = $purposeRequiredAttachmentRepository->getAppTypeAndPurposeWise($this->appTypeId, $this->purposeId);

        if($requiredConfigAttachmentsOnPurpose->isEmpty()) {
            return false;
        }

        foreach($requiredConfigAttachmentsOnPurpose as $requiredConfigAttachmentOnPurpose) {
            if(!$userAttachmentRepository->attachmentGiven($requiredConfigAttachmentOnPurpose->config_attachment_id, $this->userId)) {
                return true;
            }
        }

        return false;
    }

    public function hasRequiredConfigAttachmentsOnAppType() {
        $userAttachmentRepository = resolve('App\Repositories\Interfaces\UserAttachmentRepositoryInterface');
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');

        $requiredConfigAttachmentsOnAppType = $configAppTypeAttachmentRepository->getRequiredAppTypeConfigAttachments($this->appTypeId);

        if($requiredConfigAttachmentsOnAppType->isEmpty()) {
            return false;
        }

        foreach($requiredConfigAttachmentsOnAppType as $requiredConfigAttachmentOnAppType) {
            if(!$userAttachmentRepository->attachmentGiven($requiredConfigAttachmentOnAppType->config_attachment_id,  $this->userId)) {
                return true;
            }
        }

        return false;
    }
}