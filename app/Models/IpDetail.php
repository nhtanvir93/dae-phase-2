<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class IpDetail extends Model
{
    use SoftDeletes;

    protected $table = 'ip_details';

    protected $guarded = [];

    public $timestamps = false;

    protected $with = [
        'originCountry:id,name', 'exportingCountry:id,name', 'entryOrganization:id,name', 'variety:id,name',
        'meansOfTransport:id,name', 'purpose:id,name', 'productType:id,name,unit_id' , 'productType.unit:id,name',
        'productCategory:id,name'
    ];

    public $hidden = [
        'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at', 'deleted_by'
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function($query) {
            $query->created_by = auth()->user()->id;
            $query->created_at = Carbon::now();
        });

        static::updating(function($query) {
            $data = request()->get('ip_details');

            if(isset($data['origin_country_id'])) {
                $query->origin_country_name = null;
            } elseif (isset($data['origin_country_name'])) {
                $query->origin_country_id = null;
            }

            if(isset($data['exporting_country_id'])) {
                $query->exporting_country_name = null;
            } elseif (isset($data['exporting_country_name'])) {
                $query->exporting_country_id = null;
            }

            if(isset($data['product_category_id'])) {
                $query->other_product_category_name = null;
            } elseif (isset($data['other_product_category_name'])) {
                $query->product_category_id = null;
            }

            if(isset($data['variety_id'])) {
                $query->other_variety_name = null;
            } elseif (isset($data['other_variety_name'])) {
                $query->variety_id = null;
            }

            $query->updated_by = auth()->user()->id;
            $query->updated_at = Carbon::now();
        });
    }

    public function application()
    {
        return $this->morphOne(Application::class, 'applicationable');
    }

    public function rootApplication()
    {
        return $this->belongsTo(Application::class);
    }

    public function originCountry()
    {
        return $this->belongsTo(Country::class, 'origin_country_id');
    }

    public function exportingCountry()
    {
        return $this->belongsTo(Country::class, 'exporting_country_id');
    }

    public function meansOfTransport()
    {
        return $this->belongsTo(ConfigMeansOfTransport::class, 'means_of_transport_id');
    }

    public function entryOrganization()
    {
        return $this->belongsTo(Organization::class, 'entry_organization_id');
    }

    public function productType() {
        return $this->belongsTo(ProductType::class);
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function purpose()
    {
        return $this->belongsTo(ConfigPurpose::class, 'purpose_id');
    }

    public function variety()
    {
        return $this->belongsTo(Variety::class, 'variety_id');
    }

    public function setArrivalDateAttribute($arrivalDate)
    {
        if(!$arrivalDate) {
            $this->attributes['arrival_date'] = null;
            return;
        }
        $arrivalDate = Carbon::createFromFormat(config('app_constants.date_format'), $arrivalDate)->toDateString();
        $this->attributes['arrival_date'] = $arrivalDate;
    }

    public function getArrivalDateAttribute($arrivalDate) {
        $arrivalDate = Carbon::parse($arrivalDate);
        return $arrivalDate->format(config('app_constants.date_format'));
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
