<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class RequiredConfigAttachmentAttributeGiven implements Rule
{
    private $appAttachments;
    private $appTypeId;

    public function __construct($appAttachments, $appTypeId)
    {
        $this->appAttachments = $appAttachments;
        $this->appTypeId = $appTypeId;
    }

    public function passes($attribute, $value)
    {
        $configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        $requiredConfigAttachmentsOnAppType = $configAppTypeAttachmentRepository->getRequiredAppTypeConfigAttachments($this->appTypeId);

        if($requiredConfigAttachmentsOnAppType->isEmpty()) {
            return true;
        }

        foreach($this->appAttachments as $appAttachment) {
            $configAttachmentId = isset($appAttachment['config_attachment_id']) ? $appAttachment['config_attachment_id'] : 0;
            if($configAttachmentId > 0 && $this->doesExists($requiredConfigAttachmentsOnAppType, $configAttachmentId)) {
                $attributes = isset($appAttachment['attributes']) && count($appAttachment['attributes']) > 0 ?
                    array_column($appAttachment['attributes'],'id') : [];
                $status = $configAttachmentAttributeRepository->isRequiredAttributesGiven($appAttachment['config_attachment_id'], $attributes);

                if(!$status) {
                    return false;
                }
            }
        }

        return true;
    }

    public function doesExists($requiredConfigAttachmentsOnAppType, $configAttachmentId) {
        return $requiredConfigAttachmentsOnAppType->contains(function($appTypeConfigAttachment, $key) use($configAttachmentId) {
            return $appTypeConfigAttachment->config_attachment_id == $configAttachmentId;
        });
    }

    public function message()
    {
        return 'Required attribute/s for some or all configuration attachment/s is/are not given';
    }
}
