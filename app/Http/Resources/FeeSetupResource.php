<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FeeSetupResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'product_type' => $this->when($this->whenLoaded('productType'), function() {
                return $this->productType;
            }),
            'app_type' => $this->when($this->whenLoaded('appType'), function() {
                return $this->appType;
            }),
            'quantity_from' => $this->quantity_from,
            'quantity_to' => $this->quantity_to,
            'has_infinity_to' => $this->has_infinity_to,
            'per_quantity_price' => $this->per_quantity_price,
            'price_per_quantity' => $this->price_per_quantity,
            'quantity_per_price' => $this->quantity_per_price,
            'min_payable' => $this->min_payable,
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
