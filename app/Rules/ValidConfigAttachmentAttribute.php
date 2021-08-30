<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidConfigAttachmentAttribute implements Rule
{
    private $appAttachments;

    public function __construct($appAttachments)
    {
        $this->appAttachments = $appAttachments;
    }

    public function passes($attribute, $value)
    {
        $configAttachmentAttributeRepository = resolve('App\Repositories\Interfaces\ConfigAttachmentAttributeRepositoryInterface');

        foreach($this->appAttachments as $appAttachment) {
            if(isset($appAttachment['config_attachment_id']) && isset($appAttachment['attributes']) && count($appAttachment['attributes']) > 0) {
                foreach($appAttachment['attributes'] as $attribute) {
                    $isValidAttribute = $configAttachmentAttributeRepository->validAttachmentAttribute($appAttachment['config_attachment_id'], $attribute['id']);
                    if(!$isValidAttribute || empty($attribute['value'])) {
                        return false;
                    }
                }
            }
        }

        return true;
    }

    public function message()
    {
        return 'Invalid attribute/s for some or all configuration attachment/s';
    }
}
