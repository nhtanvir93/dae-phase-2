<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DesignationSortRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getDesignationIdString($designations) {
        $designationIdString = '';

        foreach($designations as $designation) {
            $designationIdString .= $designation->id . ',';
        }

        return substr($designationIdString,0,strlen($designationIdString) - 1);
    }

    public function rules()
    {
        $designationRepository = resolve('App\Repositories\Interfaces\DesignationRepositoryInterface');
        $designations = $designationRepository->lists();
        $designationIdString = $this->getDesignationIdString($designations);
        $size = $designations->count();

        return [
            'designations' => "required|array|size:$size",
            'designations.*' => "in:$designationIdString|distinct"
        ];
    }
}
