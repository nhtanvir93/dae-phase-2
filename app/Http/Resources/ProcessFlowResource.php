<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProcessFlowResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'app_type' => $this->when($this->whenLoaded('appType'), function() {
                return $this->appType;
            }),
            'organization' => $this->when($this->whenLoaded('organization'), function() {
                return $this->organization;
            }),
            'is_active' => $this->is_active,
            'is_restricted' => $this->is_restricted,
            'activation_date' => $this->activation_date,
            'deactivation_date' => $this->deactivation_date,
            'stages' => $this->when($this->whenLoaded('stages'), function() {
                return $this->stages;
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
