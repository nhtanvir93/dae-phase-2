<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidOrganizationOnTransportType implements Rule
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function passes($attribute, $value)
    {
        $organizationRepository = resolve('App\Repositories\Interfaces\OrganizationRepositoryInterface');

        if(!$this->data['means_of_transport_id']) {
            return true;
        }

        return $organizationRepository->isValidOrganizationOnTransportType($value, $this->data['means_of_transport_id']);
    }

    public function message()
    {
        return 'Invalid organization according to transport type';
    }
}
