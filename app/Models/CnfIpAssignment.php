<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use App\User;

class CnfIpAssignment extends Model
{
    use SoftDeletes;

    protected $table = 'cnf_ip_assignments';

    public $timestamps = false;

    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::creating(function($query) {
            $query->created_by = auth()->user()->id;
            $query->created_at = Carbon::now();
        });

        static::updating(function($query) {
            $query->updated_by = auth()->user()->id;
            $query->updated_at = Carbon::now();
        });
    }

    public function ipApplication()
    {
        return $this->belongsTo(Application::class,'ip_application_id');
    }

    public function cnfUser() {
        return $this->belongsTo(User::class, 'cnf_user_id');
    }

    public function cnfIpAssignmentDetails() {
        return $this->hasMany(CnfIpAssignmentDetail::class);
    }

    public function roApplication() {
        return $this->hasOne(Application::class, 'cnf_ip_assignment_id')->where([
            'applications.app_type_id' => config('app_constants.app_types.RO'),
            'applications.is_cancelled' => 0
        ])->orderBy('id','desc');
    }

    public function createdUser() {
        return $this->belongsTo(Profile::class, 'created_by','user_id');
    }

    public function getCreatedAtAttribute($createdAt) {
        $createdAt = Carbon::parse($createdAt);
        return $createdAt->format(config('app_constants.datetime_format'));
    }

    public function updatedUser() {
        return $this->belongsTo(Profile::class, 'updated_by','user_id');
    }

    public function getUpdatedAtAttribute($updatedAt) {
        if(!$updatedAt) {
            return null;
        }
        $updatedAt = Carbon::parse($updatedAt);
        return $updatedAt->format(config('app_constants.datetime_format'));
    }

    public function getAvailableAtAttribute($availableAt) {
        $availableAt = Carbon::parse($availableAt);
        return $availableAt->format(config('app_constants.date_format'));
    }

    public function setAvailableAtAttribute($availableAt) {
        $availableAt = Carbon::createFromFormat(config('app_constants.date_format'), $availableAt)->toDateString();
        $this->attributes['available_at'] = $availableAt;
    }

    public function deletedUser() {
        return $this->belongsTo(Profile::class, 'deleted_by');
    }

    public function getDeletedAtAttribute($deletedAt) {
        if(!$deletedAt) {
            return null;
        }
        $deletedAt = Carbon::parse($deletedAt);
        return $deletedAt->format(config('app_constants.datetime_format'));
    }
}
