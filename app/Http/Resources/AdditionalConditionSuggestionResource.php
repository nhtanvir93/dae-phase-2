<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdditionalConditionSuggestionResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'app_type' => $this->when($this->whenLoaded('appType'), function() {
                return $this->appType;
            }),
            'product_type' => $this->when($this->whenLoaded('productType'), function() {
                return $this->productType;
            }),
            'product' => $this->when($this->whenLoaded('product'), function() {
                return $this->product;
            }),
            'additional_condition' => $this->additional_condition,
            'attachment' => $this->when($this->whenLoaded('attachment'), function() {
                return $this->attachment;
            }),
            'is_active' => $this->is_active,
            'remarks' => $this->remarks,
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
