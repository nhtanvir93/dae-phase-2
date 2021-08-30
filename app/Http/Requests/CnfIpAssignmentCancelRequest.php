<?php

namespace App\Http\Requests;

use App\Rules\CheckCnfAssignmentCancelValidity;
use Illuminate\Foundation\Http\FormRequest;

class CnfIpAssignmentCancelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'cnf_ip_assignment_id' => ['required', 'exists:cnf_ip_assignments,id,is_cancelled,0', 'gt:0',
                new CheckCnfAssignmentCancelValidity]
        ];
    }
}
