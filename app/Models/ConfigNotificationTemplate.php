<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ConfigNotificationTemplate extends Model
{
    protected $table = 'config_notification_templates';


    public function defaultImage()
    {
        return $this->belongsTo(Attachment::class, 'default_image_id');
    }


    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }


    public function updatedBy()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }


    public function deletedBy()
    {
        return $this->belongsTo(User::class, 'deleted_by');
    }
}
