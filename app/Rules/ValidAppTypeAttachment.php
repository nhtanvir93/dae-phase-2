<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidAppTypeAttachment implements Rule
{
    private $configAppTypeAttachmentRepository;
    private $data;

    public function __construct($data)
    {
        $this->configAppTypeAttachmentRepository = resolve('App\Repositories\Interfaces\ConfigAppTypeAttachmentRepositoryInterface');
        $this->data = $data;
    }

    public function passes($attribute, $value)
    {
        return $this->configAppTypeAttachmentRepository->validAppTypeAttachment($this->data['app_type_id'], $value);
    }

    public function message()
    {
        return 'Invalid attachmet for selected app type';
    }
}
