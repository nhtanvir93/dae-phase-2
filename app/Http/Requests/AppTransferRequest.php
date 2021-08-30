<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckActiveProcessFlowConfig;
use App\Rules\CheckFirstStageDaeOfficial;
use App\Rules\CheckSameTransferOrganization;

class AppTransferRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');

        $applicationId = request()->get('application_id',0);
        $application = $applicationRepository->getDetails($applicationId);
        $appTypeId = $application ? $application->app_type_id : 0;

        $rules1 = [
            'application_id' => 'required',
            'organization_id' => ['required', 'exists:organizations,id,deleted_at,NULL',
                new CheckActiveProcessFlowConfig($applicationId, $appTypeId), new CheckSameTransferOrganization($applicationId)],
            'exit_entry_organization_id' => 'required|exists:organizations,id,deleted_at,NULL',
            'reason' => 'required|max:' . config('app_constants.task_field_max_value.text')
        ];

        $rules2 = [
            'application_id' => 'required',
            'organization_id' => 'required|exists:organizations,id,deleted_at,NULL',
            'reason' => 'required|max:' . config('app_constants.task_field_max_value.text')
        ];

        if($application->app_type_id == config('app_constants.app_types.RO')) {
            return $rules2;
        }

        return $rules1;
    }
}
