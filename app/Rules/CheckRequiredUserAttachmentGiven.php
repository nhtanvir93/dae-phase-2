<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckRequiredUserAttachmentGiven implements Rule
{
    private $missingAttachment;
    private $data;

    public function __construct($missingAttachments, $data)
    {
        $this->missingAttachment = $missingAttachments;
        $this->data = $data;
    }

    public function passes($attribute, $value)
    {
        if($this->missingAttachment->count() == 0) {
            return true;
        }

        $requestConfigAttachments = array_column($this->data,'config_attachment_id');
        $missingConfigAttachments = array_column($this->missingAttachment->toArray(),'id');

        $intersects = array_intersect($requestConfigAttachments, $missingConfigAttachments);

        if(count($intersects) == $this->missingAttachment->count()) {
            return true;
        }

        return false;
    }

    public function message()
    {
        return 'Mandatory attachment missing';
    }
}
