<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    const PERMISSION_ADMIN = 0;
    const PERMISSION_MANAGER = 1;
    const PERMISSION_MEMBER = 2;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'permission',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'mobile_verified_at' => 'datetime',
        'status' => 'boolean'
    ];

    //user active
    public function scopeActive(){
        return $this->where('status', true);
    }

    //user has profile
    public function userProfile(){
        return $this->hasOne(Profile::class);
    }

    //user has subscription
    public function userSubscriptions(){
        return $this->hasMany(Subscription::class);
    }

    //user has active subscription
    public function userActiveSubscriptions(){
        return $this->hasMany(Subscription::class)->where('is_expired', false);
    }
}
