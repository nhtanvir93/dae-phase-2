<?php
namespace App\Repositories;

use App\Models\StageButton;
use App\Repositories\Interfaces\StageButtonRepositoryInterface;

class StageButtonRepository extends BaseRepository implements StageButtonRepositoryInterface
{
    public function __construct(StageButton $model)
    {
        parent::__construct($model);
    }

    public function createAll($stageButtons, $processFlowId) {
        foreach($stageButtons as $stageButton) {
            $stageButton['process_flow_id'] = $processFlowId;

            parent::create($stageButton);
        }
    }

    public function updateAll($stageButtons, $processFlowId) {
        $this->deleteAll($processFlowId);
        $this->createAll($stageButtons, $processFlowId);
    }

    public function deleteAll($processFlowId) {
        $this->model->where('process_flow_id', $processFlowId)->delete();
    }

    public function getStageButtons($processFlowId, $stageLevel) {
        return $this->model
            ->select('id', 'process_flow_id', 'stage_level', 'process_button_id', 'shown_for_role_ids')
            ->with(['processButton:id,name,type'])
            ->where([
                'process_flow_id' => $processFlowId,
                'stage_level' => $stageLevel
            ])
            ->get();
    }
}