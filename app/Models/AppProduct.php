<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class AppProduct extends Model
{
    use SoftDeletes;

    protected $table = 'app_products';

    public $hidden = [
        'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at', 'deleted_by'
    ];

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

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function appType()
    {
        return $this->belongsTo(AppType::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function appProducts() {
        return $this->hasMany(AppProduct::class,'product_type_id','product_type_id');
    }

    public function photoAttachment()
    {
        return $this->belongsTo(Attachment::class, 'photo_attachment_id');
    }

    public function entryOrganization()
    {
        return $this->belongsTo(Organization::class, 'entry_organization_id');
    }

    public function roApplications() {
        return $this->belongsToMany(Application::class, 'ro_ip_application',
            'ip_application_id','ro_application_id','application_id')
            ->whereNull('ro_ip_application.deleted_at');
    }

    public function createdUser() {
        return $this->belongsTo(Profile::class, 'created_by');
    }

    public function getCreatedAtAttribute($createdAt) {
        $createdAt = Carbon::parse($createdAt);
        return $createdAt->format(config('app_constants.datetime_format'));
    }

    public function updatedUser() {
        return $this->belongsTo(Profile::class, 'updated_by');
    }

    public function getUpdatedAtAttribute($updatedAt) {
        if(!$updatedAt) {
            return null;
        }
        $updatedAt = Carbon::parse($updatedAt);
        return $updatedAt->format(config('app_constants.datetime_format'));
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
