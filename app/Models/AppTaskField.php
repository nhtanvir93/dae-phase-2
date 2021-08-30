<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class AppTaskField extends Model
{
    use SoftDeletes;

    protected $table = 'app_task_fields';

    public $timestamps = false;

    protected $guarded = [];

    protected $appends = ['value'];

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

    public function getValueAttribute()
    {
        return isset($this->value_text) ? $this->value_text : (
                    isset($this->value_no) ? $this->value_no : (
                        isset($this->value_date) ? $this->value_date : (
                            isset($this->value_long_text) ? $this->value_long_text : ''
                        )
                    )
                );
    }

    public function getValueDateAttribute($valueDate) {
        if(!$valueDate) {
            return null;
        }

        $valueDate = Carbon::parse($valueDate);
        return $valueDate->format(config('app_constants.date_format'));
    }

    public function setValueDateAttribute($valueDate)
    {
        if(!$valueDate) {
            return;
        }
        $valueDate = Carbon::createFromFormat(config('app_constants.date_format'), $valueDate)->toDateString();
        $this->attributes['value_date'] = $valueDate;
    }

    public function application() {
        return $this->belongsTo(Application::class);
    }

    public function taskField() {
        return $this->belongsTo(TaskField::class);
    }

    public function attachment()
    {
        return $this->belongsTo(Attachment::class);
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
