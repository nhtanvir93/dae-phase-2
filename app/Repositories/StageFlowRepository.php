<?php
namespace App\Repositories;

use App\Models\StageFlow;
use App\Repositories\Interfaces\StageFlowRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StageFlowRepository extends BaseRepository implements StageFlowRepositoryInterface
{
    public function __construct(StageFlow $model)
    {
        parent::__construct($model);
    }

    public function createAll($stages, $processFlowId) {
        foreach($stages as $stage) {
            $stage['process_flow_id'] = $processFlowId;

            parent::create($stage);
        }
    }

    public function updateAll($stages, $processFlowId) {
        $this->deleteAll($processFlowId);
        $this->createAll($stages, $processFlowId);
    }

    public function deleteAll($processFlowId) {
        $this->model->where('process_flow_id', $processFlowId)->delete();
    }

    public function getStageDetails($processFlowId, $stageLevel, $isIncludedFullDetails = false) {
        if($isIncludedFullDetails) {
            $relations = [
                'stage:id,name,is_lab_test_type,is_inspection_type',
                'roles:id,process_flow_id,stage_level,role_id,user_from_stage', 'roles.role:id,name',
                'tasks:stage_flow_tasks.id,stage_flow_tasks.process_flow_id,stage_flow_tasks.stage_level,stage_flow_tasks.process_task_id',
                'tasks.processTask:id,name,remarks,is_scrutinize_task,is_addon,is_inspection_sms,is_scrutinize_task,is_suggestion_for_ac,separate_form_url,position',
                'tasks.taskFields:task_field_stages.id,task_field_stages.process_flow_id,task_field_stages.stage_level,task_field_stages.process_task_id,task_field_stages.task_field_id,task_field_stages.is_required,task_field_stages.forwarding_user_stage_level,task_field_stages.default_value',
                'tasks.taskFields.taskField:id,process_task_id,task_field_name,label,input_type,level,dropdown_value_query,dropdown_value_json,loading_dependency_json,loading_dependency_query,dependent_task_field_id,stage_user_query',
                'buttons:stage_buttons.id,stage_buttons.process_flow_id,stage_buttons.stage_level,stage_buttons.process_button_id,stage_buttons.shown_for_role_ids,stage_buttons.alignment_position',
                'buttons.processButton:id,name,type'
            ];
        } else {
            $relations = [
                'stage:id,name,is_lab_test_type,is_inspection_type'
            ];
        }

        try{
            return $this->model
                ->select('id', 'process_flow_id', 'stage_id', 'level', 'is_decision_stage')
                ->with($relations)
                ->where([
                    'process_flow_id' => $processFlowId,
                    'level' => $stageLevel
                ])->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getNextStage($processFlowId, $stageLevel, $isInspectionEnabled, $isLabTestEnabled) {
        try{
            return $this->model
                ->select('stage_flows.id', 'stage_flows.stage_id', 'stage_flows.level', 'stage_flows.is_decision_stage')
                ->with(['stage:id,name,is_lab_test_type,is_inspection_type'])
                ->leftJoin('stages', 'stage_flows.stage_id', '=', 'stages.id')
                ->when($isInspectionEnabled && !$isLabTestEnabled, function($query) {
                    $query->where('stages.is_lab_test_type', 0);
                })
                ->when(!$isInspectionEnabled && $isLabTestEnabled, function($query) {
                    $query->where('stages.is_inspection_type', 0);
                })
                ->when(!$isInspectionEnabled && !$isLabTestEnabled, function($query) {
                    $query->where('stages.is_inspection_type', 0)
                        ->where('stages.is_lab_test_type', 0);
                })
                ->where([
                    'stage_flows.process_flow_id' => $processFlowId,
                    ['stage_flows.level', '>', $stageLevel]
                ])
                ->orderBy('stage_flows.level', 'ASC')
                ->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }

    public function getNearestLabTestOrInspectionStage($processFlowId, $isLabTestEnabled, $isInspectionEnabled) {
        try {
            return $this->model
                ->select('stage_flows.id', 'stage_flows.stage_id', 'stage_flows.level', 'stage_flows.is_decision_stage')
                ->leftJoin('stages', 'stage_flows.stage_id', '=', 'stages.id')
                ->where([
                    'stage_flows.process_flow_id' => $processFlowId
                ])
                ->when($isLabTestEnabled && $isInspectionEnabled, function($query) {
                    $query->where('stages.is_lab_test_type', 1)
                        ->orWhere('stages.is_inspection_type', 1);
                })
                ->when($isLabTestEnabled && !$isInspectionEnabled, function($query) {
                    $query->where('stages.is_lab_test_type', 1);
                })
                ->when(!$isLabTestEnabled && $isInspectionEnabled, function($query) {
                    $query->where('stages.is_inspection_type', 1);
                })
                ->orderBy('stage_flows.level', 'ASC')
                ->firstOrFail();
        } catch (ModelNotFoundException $exception) {
            return false;
        }
    }
}
