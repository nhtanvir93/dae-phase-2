<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppInvoiceResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'application_id' => $this->application_id,
            'bank_branch' => $this->when($this->whenLoaded('bankBranch'), function() {
                return $this->bankBranch;
            }),
            'chalan_type' => $this->chalan_type,
            'chalan_no' => $this->chalan_no,
            'amount' => $this->amount,
            'issue_date' => $this->issue_date,
            'chalan_attachment' => $this->when($this->whenLoaded('attachment'), function() {
                return $this->attachment;
            }),
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
