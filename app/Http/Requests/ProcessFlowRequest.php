<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidJsonArray;
use App\Rules\CheckRoleOrUserFromStage;
use App\Rules\DistinctValueCheck;
use App\Rules\CheckUserFromStageExist;
use App\Rules\CheckStageButtonRole;
use App\Rules\CheckAllTaskFieldsAgainstProcessTasks;
use App\Rules\CheckValidStageForwardingUser;

class ProcessFlowRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $processFlowId = $this->route('process_flow', 0);

        $processFlows = request()->get('process_flows',[]);

        $rules1 = [];
        if($processFlowId == 0) {
            $rules1 = [
                'process_flows.app_type_id' => 'required|exists:app_types,id,deleted_at,NULL',
                'process_flows.is_restricted' => 'required|in:0,1'
            ];

            if(empty($processFlows['organization_id'])) {
                $rules1['process_flows.port_type_id'] = 'required|exists:port_types,id,deleted_at,NULL';
            } else {
                $rules1['process_flows.organization_id'] = 'required|exists:organizations,id,deleted_at,NULL';
            }
        }

        $stageFlows = request()->get('stage_flows',[]);
        $max = count($stageFlows) - 1;

        $rules2 = [
            'stage_flows' => ['required', 'array', 'min:1', new CheckAllTaskFieldsAgainstProcessTasks, new CheckValidStageForwardingUser],
            'stage_flows.*.stage_id' => 'required|exists:stages,id,deleted_at,NULL',
            'stage_flows.*.stage_flow_tasks' => ['required', 'array', 'min:1', new DistinctValueCheck('process_task_id')],
            'stage_flows.*.stage_flow_tasks.*.process_task_id' => 'required|exists:process_tasks,id,deleted_at,NULL',
            'stage_flows.*.stage_flow_tasks.*.task_fields' => 'array',
            'stage_flows.*.stage_flow_tasks.*.task_fields.*.task_field_id' => 'nullable',
            'stage_flows.*.stage_flow_tasks.*.task_fields.*.is_required' => 'nullable|in:0,1',
            'stage_flows.*.stage_flow_tasks.*.task_fields.*.default_value' => 'nullable|max:190',
            'stage_flows.*.stage_flow_tasks.*.task_fields.*.forwarding_user_stage_level' => 'nullable',
            'stage_flows.*.process_stage_roles' => ['required', 'array', 'min:1', new CheckRoleOrUserFromStage,
                 new DistinctValueCheck('role_id'), new CheckUserFromStageExist],
            'stage_flows.*.process_stage_roles.*.role_id' => 'nullable|exists:roles,id,deleted_at,NULL',
            'stage_flows.*.process_stage_roles.*.user_from_stage' => "nullable|numeric|min:0|max:$max",
            'stage_flows.*.stage_buttons' => ['required', 'array', 'min:1', new DistinctValueCheck('process_button_id')],
            'stage_flows.*.stage_buttons.*.process_button_id' => 'required|exists:process_buttons,id,deleted_at,NULL',
            'stage_flows.*.stage_buttons.*.shown_for_role_ids' => ['required', 'json', new ValidJsonArray,
                new CheckStageButtonRole(request()->get('stage_flows'))]
        ];

        $rules = array_merge($rules1, $rules2);

        return $rules;
    }

    public function attributes(){
        return [
            'process_flows.app_type_id' => 'app type',
            'process_flows.organization_id' => 'organization',
            'process_flows.port_type_id' => 'port type',
            'stage_flows' => 'stage flows',
            'stage_flows.*.stage_id' => 'stage',
            'stage_flows.*.is_decision_stage' => 'is decision stage',
            'stage_flows.*.stage_flow_tasks' => 'stage flow tasks',
            'stage_flows.*.stage_flow_tasks.*.process_task_id' => 'process task',
            'stage_flows.*.stage_flow_tasks.*.task_fields' => 'task fields',
            'stage_flows.*.stage_flow_tasks.*.task_fields.*.task_field_id' => 'task fields',
            'stage_flows.*.stage_flow_tasks.*.task_fields.*.is_required' => 'is required',
            'stage_flows.*.stage_flow_tasks.*.task_fields.*.forwarding_user_stage_level' => 'forwarding user stage level',
            'stage_flows.*.process_stage_roles' => 'process stage roles',
            'stage_flows.*.process_stage_roles.*.role_id' => 'role',
            'stage_flows.*.stage_buttons' => 'stage buttons',
            'stage_flows.*.stage_buttons.*.process_button_id' => 'process button',
            'stage_flows.*.stage_buttons.*.shown_for_role_ids' => 'shown for role ids'
        ];
    }
}
