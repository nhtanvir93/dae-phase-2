<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserLogResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user' => $this->when($this->whenLoaded('user'), function() {
                return $this->user;
            }),
            'has_left_manually' => $this->has_left_manually,
            'login_time' => $this->login_time,
            'logout_time' => $this->logout_time,
            'browser_details' => $this->browser_details,
            'browser_name' => $this->browser_name,
            'device_details' => $this->device_details,
            'device_name' => $this->device_name,
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
            })
        ];
    }
}
