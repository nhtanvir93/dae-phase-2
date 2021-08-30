<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppStatusLogResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'application' => $this->when($this->whenLoaded('application'), function() {
                return $this->application;
            }),
            'stage' => $this->stage,
            'from_user' => $this->when($this->whenLoaded('fromUser'), function() {
                return $this->fromUser;
            }),
            'to_user' => $this->when($this->whenLoaded('toUser'), function() {
                return $this->toUser;
            }),
            'elapsed_time' => $this->elapsed_time,
            'status' => $this->status,
            'comment' => $this->comment,
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
