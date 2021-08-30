<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppTaskFieldResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'application_id' => $this->application_id,
            'task_field' => $this->when($this->whenLoaded('taskField'), function() {
                return $this->taskField;
            }),
            'attachment_details' => $this->when($this->whenLoaded('attachment'), function() {
                return [
                    'title' => $this->attachment_title,
                    'attachment' => $this->attachment
                ];
            }),
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
