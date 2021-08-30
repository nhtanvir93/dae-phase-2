<?php

namespace App;

use App\Models\UserAttachment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use App\Models\Profile;
use App\Models\Designation;
use App\Models\UserType;
use App\Models\Organization;
use App\Models\AreaVatCode;
use App\Models\Role;
use App\Models\ProxyUserLog;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public $timestamps = false;
    const APPLICANT = 3;
    const CNF = 6;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot() {
        parent::boot();

        static::creating(function($query) {
            if(empty($query->user_type_id)) {
                $companyTypes = config('app_constants.company_types');

                $query->user_type_id = $query->company_type == $companyTypes['CNF'] ? self::CNF : self::APPLICANT;
                $query->created_at = Carbon::now();
            }
        });
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function userType()
    {
        return $this->belongsTo(UserType::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function areaVatCode()
    {
        return $this->belongsTo(AreaVatCode::class);
    }

    public function superior()
    {
        return $this->belongsTo(User::class,'superior_id');
    }

    public function roles() {
        return $this->belongsToMany(Role::class, 'user_role')
            ->whereNull('user_role.deleted_at');
    }

    public function profileAttachments() {
        return $this->hasMany(UserAttachment::class)
            ->join('config_attachments', 'user_attachments.config_attachment_id', '=', 'config_attachments.id')
            ->where('config_attachments.is_profile_eligible',1);
    }

    public function getIsActiveAttribute($isActive) {
        return (bool)$isActive;
    }

    public function getEmailVerifiedAtAttribute($emailVerifiedAt) {
        if(!$emailVerifiedAt) {
            return null;
        }
        $emailVerifiedAt = Carbon::parse($emailVerifiedAt);
        return $emailVerifiedAt->format(config('app_constants.date_format'));
    }

    public function createdUser() {
        return $this->belongsTo(Profile::class, 'created_by');
    }

    public function proxy(){
        return $this->hasOne(ProxyUserLog::class,'proxy_user_id')->whereNull('to');
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

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = Hash::make($password);
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

    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
