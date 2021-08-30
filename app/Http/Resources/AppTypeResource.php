<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppTypeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'short_name' => $this->short_name,
            'type' => $this->type,
            'certificate_validity_days' => $this->certificate_validity_days,
            'certificate_extended_days' => $this->certificate_extended_days,
            'description' => $this->description,
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
