<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NoticeResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_type' => $this->when($this->whenLoaded('userType'), function() {
                return $this->userType;
            }),
            'notice_msg' => $this->notice_msg,
            'notice_details' => $this->notice_details,
            'doc_no' => $this->doc_no,
            'doc_issue_date' => $this->doc_issue_date,
            'from_date' => $this->from_date,
            'to_date' => $this->to_date,
            'is_active' => $this->is_active,
            'notice_attachment' => $this->when($this->whenLoaded('attachment'), function() {
                return $this->attachment;
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
