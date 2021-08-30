<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProcessTaskResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'is_scrutinize_task' => $this->is_scrutinize_task,
            'is_addon' => $this->is_addon,
            'is_inspection_sms' => $this->is_inspection_sms,
            'is_suggestion_for_ac' => $this->is_suggestion_for_ac,
            'separate_form_url' => $this->separate_form_url,
            'remarks' => $this->remarks,
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
