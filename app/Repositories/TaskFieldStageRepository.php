<?php
namespace App\Repositories;

use App\Models\TaskFieldStage;
use App\Repositories\Interfaces\TaskFieldStageRepositoryInterface;

class TaskFieldStageRepository extends BaseRepository implements TaskFieldStageRepositoryInterface
{
    public function __construct(TaskFieldStage $model)
    {
        parent::__construct($model);
    }

    public function createAll($taskFieldStages, $processFlowId) {
        foreach($taskFieldStages as $taskFieldStage) {
            $taskFieldStage['process_flow_id'] = $processFlowId;

            parent::create($taskFieldStage);
        }
    }

    public function updateAll($taskFieldStages, $processFlowId) {
        $this->deleteAll($processFlowId);
        $this->createAll($taskFieldStages, $processFlowId);
    }

    public function deleteAll($processFlowId) {
        $this->model->where('process_flow_id', $processFlowId)->delete();
    }

    public function getStageWiseTaskFields($processFlowId, $stageLevel) {
        return $this->model
            ->select('id', 'process_flow_id', 'stage_level', 'task_field_id', 'is_required', 'forwarding_user_stage_level')
            ->with(['taskField:id,process_task_id,task_field_name,label,input_type,level,dropdown_value_query,dropdown_value_json,loading_dependency_json,loading_dependency_query,dependent_task_field_id,stage_user_query'])
            ->where([
                'process_flow_id' => $processFlowId,
                'stage_level' => $stageLevel
            ])
            ->get();
    }
}