<?php
namespace App\Repositories;

use App\Models\StageFlowTask;
use App\Repositories\Interfaces\StageFlowTaskRepositoryInterface;
use Illuminate\Support\Facades\DB;

class StageFlowTaskRepository extends BaseRepository implements StageFlowTaskRepositoryInterface
{
    public function __construct(StageFlowTask $model)
    {
        parent::__construct($model);
    }

    public function createAll($tasks, $processFlowId) {
        foreach($tasks as $task) {
            $task['process_flow_id'] = $processFlowId;

            parent::create($task);
        }
    }

    public function updateAll($tasks, $processFlowId) {
        $this->deleteAll($processFlowId);
        $this->createAll($tasks, $processFlowId);
    }

    public function deleteAll($processFlowId) {
        $this->model->where('process_flow_id', $processFlowId)->delete();
    }

    public function getProcessTaskFields($processFlowId, $stageLevel = false) {
        $stageFlowTasks = $this->model
            ->select('id', 'process_flow_id', 'stage_level', 'process_task_id')
            ->with([
                'processTask:id,name,separate_form_url,position,is_scrutinize_task,is_addon,is_inspection_sms',
                'processTask.taskFields:id,process_task_id,task_field_name,label,input_type,level,dropdown_value_query,dropdown_value_json,loading_dependency_json,loading_dependency_query,dependent_task_field_id,stage_user_query',
                'processTask.taskFields.dependentTaskField:id,process_task_id,task_field_name,label,input_type,level,dropdown_value_query,dropdown_value_json,loading_dependency_json,loading_dependency_query,dependent_task_field_id,stage_user_query'
            ])
            ->where('process_flow_id', $processFlowId)
            ->when($stageLevel !== false, function($query) use ($stageLevel) {
                $query->where('stage_level', $stageLevel);
            })
            ->get();

        $taskFields = $stageFlowTasks->pluck('processTask.taskFields');

        $taskFieldsTemp = [];

        foreach($taskFields as $taskFieldItems) {
            $taskFieldsTemp = array_merge($taskFieldsTemp, $taskFieldItems->toArray());
        }

        return collect($taskFieldsTemp)->unique('id');
    }

    public function getProcessTasks($processFlowId) {
        $stageFlowTasks = $this->model
            ->select('id', 'process_flow_id', 'process_task_id')
            ->with([
                'processTask:id,name,separate_form_url,position,is_scrutinize_task,is_addon,is_inspection_sms',
                'processTask.taskFields:id,process_task_id,task_field_name,label,input_type,level,dropdown_value_query,dropdown_value_json,loading_dependency_json,loading_dependency_query,dependent_task_field_id,stage_user_query'
            ])
            ->where('process_flow_id', $processFlowId)
            ->get();

        return $stageFlowTasks->unique('process_task_id')->values();
    }
}