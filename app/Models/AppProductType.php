<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class AppProductType extends Model
{
    use SoftDeletes;

    protected $table = 'app_product_types';

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

    public function appType()
    {
        return $this->belongsTo(AppType::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }
}
