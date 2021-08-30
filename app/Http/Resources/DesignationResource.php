<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DesignationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'level' => $this->level,
            'full_name' => $this->full_name,
            'bn_full_name' => $this->bn_full_name,
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
