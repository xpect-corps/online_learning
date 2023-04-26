<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles,SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'mobile_number',
        'gender',
        'email',
        'email_verified_at',
        'dob',
        'is_clinician',
        'is_hospital',
        'is_customer',
        'latitude',
        'longitude',
        'city',
        'state',
        'country',
        'address',
        'pincode',
        'image',
        'sms_otp',
        'mobile_verified',
        'is_active',
        'password',
        'deleted_at',
        'is_coordinator',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function countryname()
    {
        return $this->belongsTo('App\Models\Country','country','id');
    }
    public function statename()
    {
        return $this->belongsTo('App\Models\State','state','id');
    }
    public function citynames()
    {
        return $this->belongsTo('App\Models\City','city','id');
    }
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','user_id','id');
    }
    public function hospital()
    {
        return $this->belongsTo('App\Models\Hospital','user_id','id');
    }
    public function residence()
    {
        return $this->belongsTo('App\Models\ResidenceType','residence_type','id');
    }

}
