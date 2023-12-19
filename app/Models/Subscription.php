<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    //is expired
    const EXPIRED_YES = true;
    const EXPIRED_NO = false;

    //status
    const STATUS_ACTIVE = true;
    const STATUS_INACTIVE = false;

    protected $fillable = [
        'user_id',
        'member_id',
        'package_id',
        'num_months',
        'start_date',
        'end_date',
        'num_of_days',
        'is_expired',
        'status'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_expired' => 'boolean',
        'status' => 'boolean'
    ];

    public function scopeActive()
    {
        return $this->where('status', true);
    }

    public function subscriptionUser(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function subscriptionPackage(){
        return $this->hasOne(Package::class, 'id', 'package_id');
    }

    public function subscriptionMember()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }
}
