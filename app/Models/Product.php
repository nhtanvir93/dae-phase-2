<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Product extends Model
{
    use SoftDeletes;

    protected $table = 'products';

    protected $guarded = [];

    public $timestamps = false;

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

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
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
