<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\EnglishName;
use App\Rules\ValidSelectQuery;
use App\Rules\ValidSelectDataJson;
use App\Rules\ValidJsonArray;

class TaskFieldRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    private function getProcessTaskIdString($processTasks) {
        $processTaskString = '';

        foreach($processTasks as $processTask) {
            $processTaskString .= $processTask->id . ',';
        }

        return substr($processTaskString,0,strlen($processTaskString) - 1);
    }

    public function rules()
    {
        $taskFieldRepository = resolve('App\Repositories\Interfaces\TaskFieldRepositoryInterface');
        $taskField = $taskFieldRepository->getDetails($this->route('task_field'));

        $taskFieldId = $taskField ? $taskField->id : 0;
        $processTaskId = request()->get('process_task_id',0);

        $inputTypes = config('app_constants.task_field_input_types');
        $inputTypeString = implode(',',array_values($inputTypes));

        $dependentTaskFieldInputTypes = ['BOOLEAN', 'IS_INSPECTION_ENABLED', 'IS_LAB_TEST_ENABLED'];

        $taskFields = $taskFieldRepository->getProcessTaskWise($processTaskId)->filter(function ($taskField) use ($taskFieldId) {
            return $taskField->id != $taskFieldId;
        });

        $dependentTaskFields = $taskFields->filter(function ($taskField) use ($dependentTaskFieldInputTypes) {
            return in_array($taskField->input_type, $dependentTaskFieldInputTypes);
        });

        $dependentProcessTaskString = $this->getProcessTaskIdString($dependentTaskFields);

        $taskFieldIds = $taskFields->pluck('id')->toArray();

        $isStageUserQueryRequired = request()->get('input_type') == config('app_constants.task_field_input_types.STAGE_USER') ?
            true : false;

        $rules = [
            'label' => ['required', 'max:150', "unique:task_fields,label,$taskFieldId,id,process_task_id,$processTaskId,deleted_at,NULL", new EnglishName],
            'task_field_name' => 'nullable|regex:/^[\w\.]+$/i|max:150',
            'input_type' => "required|in:$inputTypeString",
            'process_task_id' => 'required|exists:process_tasks,id,is_scrutinize_task,0,is_addon,0,is_inspection_sms,0,deleted_at,NULL',
            'dependent_task_field_id' => "nullable|exists:task_fields,id,deleted_at,NULL|in:$dependentProcessTaskString",
            'dropdown_value_json' => ['json', 'max:1000', new ValidSelectDataJson],
            'dropdown_value_query' => ['max:1000', new ValidSelectQuery],
            'loading_dependency_json' => ['json', 'max:1000', new ValidJsonArray($taskFieldIds)],
            'loading_dependency_query' => ['max:1000', new ValidSelectQuery],
            'stage_user_query' => [ $isStageUserQueryRequired ? 'required' : 'nullable', new ValidSelectQuery(true)]
        ];

        if(request()->get('dropdown_value_json') == null && request()->get('dropdown_value_query') == null) {
            $rules['dropdown_value_json'][] = 'nullable';
            $rules['dropdown_value_query'][] = 'nullable';
        } elseif(request()->get('dropdown_value_json') == null) {
            $rules['dropdown_value_json'][] = 'nullable';
            $rules['dropdown_value_query'][] = 'required';
        } else {
            $rules['dropdown_value_json'][] = 'required';
            $rules['dropdown_value_query'][] = 'nullable';
            $rules['dropdown_value_query'][] = function ($attribute, $query, $fail) {
                if ($query !== null) {
                    $fail('The dropdown value query field should be null');
                }
            };
        }

        if(request()->get('loading_dependency_json') == null && request()->get('loading_dependency_query') == null) {
            $rules['loading_dependency_json'][] = 'nullable';
            $rules['loading_dependency_query'][] = 'nullable';
        } else {
            $rules['loading_dependency_json'][] = 'required';
            $rules['loading_dependency_query'][] = 'required';
        }

        return $rules;
    }

    public function attributes(){

        return [
            'process_task_id' => 'process task',
            'dependent_task_field_id' => 'dependent task field',
        ];
    }
}
