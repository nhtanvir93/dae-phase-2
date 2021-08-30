<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class TaskFieldStage extends Model
{
    use SoftDeletes;
    use \Awobaz\Compoships\Compoships;

    protected $table = 'task_field_stages';

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

    public function processFlow() {
        return $this->belongsTo(ProcessFlow::class);
    }

    public function taskField() {
        return $this->belongsTo(TaskField::class);
    }

    public function getDefaultValueAttribute($defaultValue) {
        if(is_null($defaultValue)) {
            return $defaultValue;
        }

        $floatPattern = '#^\d+\.\d+$#';
        $intPattern = '#^\d+$#';

        return $defaultValue == 'true' ? true :
            (
                $defaultValue == 'false' ? false :
                    (
                        preg_match($floatPattern, $defaultValue) ? floatval($defaultValue) :
                            (
                                preg_match($intPattern, $defaultValue) ? intval($defaultValue) : $defaultValue
                            )
                    )
            );
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
