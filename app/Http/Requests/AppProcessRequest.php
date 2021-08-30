<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\RequiedFieldGivenOrNot;
use App\Rules\CheckInvalidInputSize;
use App\Rules\CheckValidStageUser;
use App\Rules\CheckAppTaskFieldLoadingDependency;
use App\Rules\CheckAppTaskFieldDependency;
use App\Rules\CheckValidSelectAppTaskFieldValue;
use App\Rules\CheckRequiredAppTaskFields;

class AppProcessRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getTaskFieldString($taskFields) {
        $taskFieldString = '';

        foreach($taskFields as $taskField) {
            $taskFieldString .= $taskField['id'] . ',';
        }

        return substr($taskFieldString,0,strlen($taskFieldString) - 1);
    }

    private function getProcessButtonString($processButtons, $application) {
        $userRoleRepository = resolve('App\Repositories\Interfaces\UserRoleRepositoryInterface');
        $userRepository = resolve('App\Repositories\Interfaces\UserRepositoryInterface');

        $processButtonString = '';
        $appHoldingUserId = $application->app_holding_user_id > 0 ? $application->app_holding_user_id : 0;

        $proxyUser = $userRepository->getProxyUser($appHoldingUserId);

        $userRoles = $proxyUser ?
            $userRoleRepository->getRoles($appHoldingUserId) : $userRoleRepository->getRoles(auth()->user()->id);

        if($userRoles->count() == 0) {
            return null;
        }

        $roles = $userRoles->pluck('role_id')->toArray();

        foreach($processButtons as $processButton) {
            $shownForRoleIds = json_decode($processButton->shown_for_role_ids);

            if(count(array_intersect($shownForRoleIds, $roles)) > 0) {
                $processButtonString .= $processButton->processButton->type . ',';
            }
        }

        return substr($processButtonString,0,strlen($processButtonString) - 1);
    }

    public function rules()
    {
        $applicationRepository = resolve('App\Repositories\Interfaces\ApplicationRepositoryInterface');
        $taskFieldService = resolve('App\Services\TaskFieldService');

        $application = $applicationRepository->getDetails($this->route('application_id'));

        $taskFields = $applicationRepository->getCurrentStageTaskFields($this->route('application_id'));
        $processButtons = $applicationRepository->getCurrentStageButtons($this->route('application_id'));

        $taskFieldString = $taskFields->count() > 0 ? $this->getTaskFieldString($taskFields) : null;
        $processButtonString = $processButtons->count() > 0 ? $this->getProcessButtonString($processButtons, $application) : null;

        $stageUserTaskFields = $taskFieldService->getStageUserTaskFields($taskFields);
        $taskFieldsHavingDependency = $taskFieldService->getTaskFieldsHavingDependency($taskFields);
        $selectTaskFields = $taskFieldService->getSelectTypeTaskFields($taskFields);
        $taskFieldsHavingLoadingDependency = $taskFieldService->getLoadingTypeTaskFields($taskFields);

        return [
            'task_fields' => ['required', 'array', new RequiedFieldGivenOrNot($taskFields),
                new CheckInvalidInputSize($taskFields), new CheckAppTaskFieldDependency($taskFieldsHavingDependency),
                new CheckValidSelectAppTaskFieldValue($selectTaskFields), new CheckAppTaskFieldLoadingDependency($taskFieldsHavingLoadingDependency, $taskFields),
                new CheckValidStageUser($stageUserTaskFields, $application->organization_id),
                new CheckRequiredAppTaskFields($application->process_flow_id, $application->current_stage, request()->get('event_type'))],
            'task_fields.*.id' => "required|in:$taskFieldString|distinct",
            'task_fields.*.value' => 'nullable',
            'task_fields.*.attachment_title' => 'nullable|max:150',
            'task_fields.*.attachment' => 'nullable|mimes:jpg,jpeg,png,pdf|max:1000',
            'event_type' => "required|in:$processButtonString"
        ];
    }
}
