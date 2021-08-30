<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SmsEmailLogResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'subject' => $this->subject,
            'message' => $this->message,
            'to' => $this->when($this->whenLoaded('toUser'), function() {
                return $this->toUser;
            }),
            'from' => $this->when($this->whenLoaded('fromUser'), function() {
                return $this->fromUser;
            }),
            'type' => $this->type,
            'event_type' => $this->event_type,
            'status' => $this->status,
            'description' => $this->description,
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
