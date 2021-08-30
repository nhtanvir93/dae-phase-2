<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CnfIpAssignmentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ip_application' => $this->when($this->whenLoaded('ipApplication'), function() {
                return $this->ipApplication;
            }),
            'cnf_user' => $this->when($this->whenLoaded('cnfUser'), function() {
                return $this->cnfUser;
            }),
            'cnf_ip_assignment_details' => $this->when($this->whenLoaded('cnfIpAssignmentDetails'), function() {
                return $this->cnfIpAssignmentDetails;
            }),
            'ro_application' => $this->when($this->whenLoaded('processingRoApplication'), function() {
                return $this->processingRoApplication;
            }),
            'is_cancelled' => $this->is_cancelled,
            'is_locked' => $this->is_locked,
            'available_at' => $this->available_at,
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
