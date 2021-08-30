<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class ProcessFlow extends Model
{
    use SoftDeletes;

    protected $table = 'process_flows';

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

    public function appType() {
        return $this->belongsTo(AppType::class);
    }

    public function organization() {
        return $this->belongsTo(Organization::class);
    }

    public function stages() {
        return $this->hasMany(StageFlow::class, 'process_flow_id');
    }

    public function getActivationDateAttribute($activationDate) {
        if(!$activationDate) {
            return null;
        }
        $activationDate = Carbon::parse($activationDate);
        return $activationDate->format(config('app_constants.date_format'));
    }

    public function getDeactivationDateAttribute($deactivationDate) {
        if(!$deactivationDate) {
            return null;
        }
        $deactivationDate = Carbon::parse($deactivationDate);
        return $deactivationDate->format(config('app_constants.date_format'));
    }

    public function createdUser() {
        return $this->belongsTo(Profile::class, 'created_by', 'user_id');
    }

    public function getCreatedAtAttribute($createdAt) {
        $createdAt = Carbon::parse($createdAt);
        return $createdAt->format(config('app_constants.datetime_format'));
    }

    public function updatedUser() {
        return $this->belongsTo(Profile::class, 'updated_by', 'user_id');
    }

    public function getUpdatedAtAttribute($updatedAt) {
        if(!$updatedAt) {
            return null;
        }
        $updatedAt = Carbon::parse($updatedAt);
        return $updatedAt->format(config('app_constants.datetime_format'));
    }

    public function deletedUser() {
        return $this->belongsTo(Profile::class, 'deleted_by', 'user_id');
    }

    public function getDeletedAtAttribute($deletedAt) {
        if(!$deletedAt) {
            return null;
        }
        $deletedAt = Carbon::parse($deletedAt);
        return $deletedAt->format(config('app_constants.datetime_format'));
    }
}
