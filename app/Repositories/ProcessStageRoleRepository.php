<?php
namespace App\Repositories;

use App\Models\ProcessStageRole;
use App\Repositories\Interfaces\ProcessStageRoleRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class ProcessStageRoleRepository extends BaseRepository implements ProcessStageRoleRepositoryInterface
{
    public function __construct(ProcessStageRole $model)
    {
        parent::__construct($model);
    }

    public function createAll($stageRoles, $processFlowId) {
        foreach($stageRoles as $stageRole) {
            $stageRole['process_flow_id'] = $processFlowId;

            parent::create($stageRole);
        }
    }

    public function updateAll($stageRoles, $processFlowId) {
        $this->deleteAll($processFlowId);
        $this->createAll($stageRoles, $processFlowId);
    }

    public function deleteAll($processFlowId) {
        $this->model->where('process_flow_id', $processFlowId)->delete();
    }

    public function getAllRoleDetails($processFlowId, $stageLevel) {
        $processStageRoles = $this->model
            ->select('id', 'process_flow_id', 'stage_level', 'role_id', 'user_from_stage')
            ->with(['role:id,name'])
            ->where([
                'process_flow_id' => $processFlowId,
                'stage_level' => $stageLevel
            ])
            ->get();

        return $processStageRoles;
    }

    public function getStageRoles($processFlowId, $stageLevel) {
        $processStageRoles = $this->model
            ->select('id', 'process_flow_id', 'stage_level', 'role_id', 'user_from_stage')
            ->with(['role:id,name'])
            ->where([
                'process_flow_id' => $processFlowId,
                'stage_level' => $stageLevel
            ])
            ->get();

        if($processStageRoles->count() == 1 && $processStageRoles->first()->user_from_stage !== null) {
            return $this->getStageRoles($processFlowId, $processStageRoles->first()->user_from_stage);
        }

        return $processStageRoles;
    }
}