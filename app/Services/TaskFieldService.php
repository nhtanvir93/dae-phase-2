<?php

namespace App\Services;


class TaskFieldService
{
    public function getStageUserTaskFields($taskFields) {
        return $taskFields->filter(function ($taskField) {
            return $taskField['input_type'] == config('app_constants.task_field_input_types.STAGE_USER');
        });
    }

    public function getTaskFieldsHavingDependency($taskFields) {
        return $taskFields->filter(function ($taskField) {
            return $taskField['dependent_task_field_id'] > 0;
        });
    }

    public function getSelectTypeTaskFields($taskFields) {
        return $taskFields->filter(function ($taskField) {
            return
                (
                    $taskField['input_type'] == config('app_constants.task_field_input_types.SELECT')
                    || $taskField['input_type'] == config('app_constants.task_field_input_types.MULTI_SELECT')
                )
                && !isset($taskField['loading_dependency_json']) && !isset($taskField['loading_dependency_query']);
        });
    }

    public function getLoadingTypeTaskFields($taskFields) {
        return $taskFields->filter(function ($taskField) {
            return isset($taskField['loading_dependency_json']) && isset($taskField['loading_dependency_query']);
        });
    }
}