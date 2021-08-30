<?php

namespace App\Http\Requests;

use App\Rules\CheckIpApprovedApplicationValidity;
use App\Rules\CheckCnfAssignmentValidQuantity;
use App\Rules\CheckCnfOrganization;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckCnFAssignmentValidity;

class CnfIpAssignmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $cnfIpAssignment = request()->get('cnf_ip_assignments');
        $ipApplicationId = isset($cnfIpAssignment['ip_application_id']) ? $cnfIpAssignment['ip_application_id'] : 0;
        $application = $ipApplicationId > 0 ? $applicationRepository->getDetailsOnly($ipApplicationId) : null;

        $validityDateRule = $application ? 'in:' . $application->certificate_validity_date : null;

        return [
            'cnf_ip_assignments.ip_application_id' => ['required', new CheckIpApprovedApplicationValidity()],
            'cnf_ip_assignments.available_at' => "required|$validityDateRule",
            'cnf_ip_assignments.cnf_user_id' => ['required', new CheckCnFAssignmentValidity($ipApplicationId),
                new CheckCnfOrganization($application)],
            'cnf_ip_assignment_details' => ['required', 'array', new CheckCnfAssignmentValidQuantity($ipApplicationId)],
            'cnf_ip_assignment_details.*.app_product_id' => 'required|numeric|gt:0',
            'cnf_ip_assignment_details.*.product_type_id' => 'required|numeric|gt:0',
            'cnf_ip_assignment_details.*.product_id' => 'nullable|numeric|gt:0',
            'cnf_ip_assignment_details.*.product_name' => 'nullable',
            'cnf_ip_assignment_details.*.botanical_name' => 'nullable',
            'cnf_ip_assignment_details.*.quantity' => 'required|numeric|gt:0',
            'cnf_ip_assignment_details.*.pack_size' => 'nullable',
            'cnf_ip_assignment_details.*.variety' => 'nullable'
        ];
    }

    public function attributes(){
        return [
            'cnf_ip_assignments.ip_application_id' => 'ip application',
            'cnf_ip_assignments.available_at' => 'available at',
            'cnf_ip_assignments.cnf_user_id' => 'cnf user',
            'cnf_ip_assignment_details' => 'required|array',
            'cnf_ip_assignment_details.*.product_type_id' => 'product type',
            'cnf_ip_assignment_details.*.product_id' => 'product id',
            'cnf_ip_assignment_details.*.product_name' => 'product name',
            'cnf_ip_assignment_details.*.botanical_name' => 'botanical name',
            'cnf_ip_assignment_details.*.quantity' => 'quantity',
            'cnf_ip_assignment_details.*.pack_size' => 'pack size',
            'cnf_ip_assignment_details.*.variety' => 'variety'
        ];
    }
}
