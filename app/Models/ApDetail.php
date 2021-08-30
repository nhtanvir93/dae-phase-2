<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ApDetail extends Model
{
    protected $table = 'ap_details';


    public function application()
    {
        return $this->morphOne(Application::class, 'applicationable');
    }


    public function applicationSpecific()
    {
        return $this->belongsTo(Application::class, 'application_id');
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
