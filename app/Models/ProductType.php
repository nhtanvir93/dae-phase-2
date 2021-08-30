<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class ProductType extends Model
{
    use SoftDeletes;

    protected $table = 'product_types';

    protected $guarded = [];

    public $timestamps = false;

    public $appends = ['seed_type_name'];

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

    public function unit() {
        return $this->belongsTo(Unit::class);
    }

    public function appTypes()
    {
        return $this->belongsToMany(AppType::class, 'app_product_types')->whereNull('app_product_types.deleted_at');
    }

    public function createdUser() {
        return $this->belongsTo(Profile::class, 'created_by', 'user_id');
    }

    public function getSeedTypeNameAttribute() {
        return $this->is_seed == 1 ? 'SEED' : 'NON SEED';
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
