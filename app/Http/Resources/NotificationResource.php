<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'application' => $this->when($this->whenLoaded('application'), function() {
                return $this->application;
            }),
            'user' => $this->when($this->whenLoaded('user'), function() {
                return $this->user;
            }),
            'event_type' => $this->event_type,
            'message' => $this->message,
            'is_read' => $this->is_read,
            'read_time' => $this->read_time,
            'is_cleared' => $this->is_cleared,
            'cleared_time' => $this->cleared_time,
            'api' => $this->api,
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
