<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskFieldResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'label' => $this->label,
            'task_field_name' => $this->task_field_name,
            'input_type' => $this->input_type,
            'process_task' => $this->when($this->whenLoaded('processTask'), function() {
                return $this->processTask;
            }),
            'dependent_task_field' => $this->when($this->whenLoaded('dependentTaskField'), function() {
                return $this->dependentTaskField;
            }),
            'dropdown_value_query' => $this->dropdown_value_query,
            'dropdown_value_json' => $this->dropdown_value_json,
            'loading_dependency_query' => $this->loading_dependency_query,
            'loading_dependency_json' => $this->loading_dependency_json,
            'stage_user_query' => $this->stage_user_query,
            'created_by' => $this->when($this->whenLoaded('createdUser'), function() {
                return $this->createdUser;
            }),
            'created_at' => $this->when($this->created_at, function() {
                return $this->created_at;
            }),
            'updated_by' => $this->when($this->updatedUser, function() {
                return $this->updatedUser;
            }),
            'updated_at' => $this->when($this->updated_at, function() {
                return $this->updated_at;
            }),
            'deleted_by' => $this->when($this->deletedUser, function() {
                return $this->deletedUser;
            }),
            'deleted_at' => $this->when($this->deleted_at, function() {
                return $this->deleted_at;
            })
        ];
    }
}
