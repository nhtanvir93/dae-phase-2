<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrganizationResource extends JsonResource
{
    public function toArray($request)
    {
        return  [
            'id' => $this->id,
            'name' => $this->name,
            'bn_name' => $this->bn_name,
            'type' => $this->type,
            'port_cateogry' => $this->when($this->whenLoaded('portCategory'), function() {
                return $this->portCategory;
            }),
            'port_type' => $this->when($this->whenLoaded('portType'), function() {
                return $this->portType;
            }),
            'means_of_transport' => $this->when($this->whenLoaded('meansofTransport'), function() {
                return $this->meansofTransport;
            }),
            'phone' => $this->phone,
            'email' => $this->email,
            'website' => $this->website,
            'custom_house' => $this->custom_house,
            'address' => $this->when($this->whenLoaded('address'), function() {
                return $this->address;
            }),
            'head_user' => $this->when($this->whenLoaded('headUser'), function() {
                return $this->headUser->profile;
            }),
            'logo_attachment' => $this->when($this->whenLoaded('logoAttachment'), function() {
                return $this->logoAttachment;
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
