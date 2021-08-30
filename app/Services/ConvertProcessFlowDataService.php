<?php

namespace App\Services;

class ConvertProcessFlowDataService
{
    public function convert($data) {
        $stageFlows = $data['stage_flows'];
        unset($data['stage_flows']);

        $data['stage_flows'] = [];
        $data['process_stage_roles'] = [];
        $data['stage_flow_tasks'] = [];
        $data['task_field_stages'] = [];
        $data['stage_buttons'] = [];

        foreach($stageFlows as $level => $stageFlow) {
            $processStageRoles = $stageFlow['process_stage_roles'];
            $stageFlowTasks = $stageFlow['stage_flow_tasks'];
            $stageButtons = $stageFlow['stage_buttons'];

            unset($stageFlow['process_stage_roles']);
            unset($stageFlow['stage_flow_tasks']);
            unset($stageFlow['stage_buttons']);

            $stageFlow['level'] = $level;
            $data['stage_flows'][] = $stageFlow;

            foreach($processStageRoles as $processStageRole) {
                $processStageRole['stage_level'] = $level;
                $data['process_stage_roles'][] = $processStageRole;
            }

            foreach($stageFlowTasks as $stageFlowTask) {
                $stageFlowTask['stage_level'] = $level;

                $taskFields = $stageFlowTask['task_fields'];
                unset($stageFlowTask['task_fields']);

                $data['stage_flow_tasks'][] = $stageFlowTask;

                foreach($taskFields as $taskField) {
                    if(!empty($taskField)) {
                        $taskField['stage_level'] = $level;
                        $taskField['process_task_id'] = $stageFlowTask['process_task_id'];
                        $data['task_field_stages'][] = $taskField;
                    }
                }
            }

            foreach($stageButtons as $alignmentPosition => $stageButton) {
                $stageButton['stage_level'] = $level;
                $data['stage_buttons'][] = $stageButton;
            }
        }

        return $data;
    }
}