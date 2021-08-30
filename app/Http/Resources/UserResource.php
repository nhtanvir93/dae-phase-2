<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_type_label' => $this->user_type_label,
            'username' => $this->username,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'is_active' => $this->is_active,
            'email_verified_at' => $this->email_verified_at,
            'remember_token' => $this->remember_token,
            'card_no' => $this->card_no,
            'area_vat_code' =>  $this->when($this->whenLoaded('areaVatCode'), function() {
                return $this->areaVatCode;
            }),
            'designation' =>  $this->when($this->whenLoaded('designation'), function() {
                return $this->designation;
            }),
            'user_type' => $this->when($this->whenLoaded('userType'), function() {
                return $this->userType;
            }),
            'organization' => $this->when($this->whenLoaded('organization'), function() {
                return $this->organization;
            }),
            'superior' => $this->when($this->whenLoaded('superior'), function() {
                return $this->superior->profile;
            }),
            'roles' => $this->when($this->whenLoaded('roles'), function() {
                return $this->roles;
            }),
            'profile' => $this->when($this->whenLoaded('profile'), function() {
                return $this->profile;
            }),
            'profileAttachments' => $this->when($this->whenLoaded('profileAttachments'), function() {
                return $this->profileAttachments;
            }),
            'proxy' =>  $this->when($this->whenLoaded('proxy'), function() {
                return $this->proxy;
            }),
            'company_type' => $this->company_type,
            'is_profile_completed' => $this->is_profile_completed,
            'created_at' => $this->when($this->created_at, function() {
                return $this->created_at;
            }),
            'updated_at' => $this->when($this->updated_at, function() {
                return $this->updated_at;
            }),
            'deleted_at' => $this->when($this->deleted_at, function() {
                return $this->deleted_at;
            })
        ];
    }
}
