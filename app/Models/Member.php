<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    //subscription
    const SUBSCRIPTION_ACTIVE = true;
    const SUBSCRIPTION_INACTIVE = false;

    //deleted
    const IS_DELETED_YES = true;
    const IS_DELETED_NO = false;

    //status
    const STATUS_ACTIVE = true;
    const STATUS_INACTIVE = false;

    protected $fillable = [
        'user_id',
        'registration_no',
        'member_name',
        'member_mobile',
        'is_policy',
        'policy_number',
        'is_medical_allergy',
        'id_type',
        'id_no',
        'dob',
        'gender',
        'marital_status',
        'spouse_name',
        'spouse_dob',
        'children_no',
        'anniversary_date',
        'address',
        'city',
        'pin_code',
        'police_station',
        'gmail_id',
        'facebook_id',
        'staying_with',
        'location_type',
        'security_available',
        'blood_group',
        'medical_condition',
        'hospitalization_history',
        'personal_doctor_details',
        'sponsored_by',
        'is_subscription_active',
        'is_deleted',
        'status'
    ];

    protected $casts = [
        //'dob' => 'date:Y-m-d'
        'is_policy' => 'boolean',
        'is_medical_allergy' => 'boolean',
        'is_subscription_active' => 'boolean',
        'is_deleted' => 'boolean',
        'status' => 'boolean'
    ];

    //active members
    public function scopeActive()
    {
        return $this->where('status', Member::STATUS_ACTIVE);
    }

    //member has parent User
    public function memberParentUser(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    //user has subscription
    public function userSubscriptions(){
        return $this->hasMany(Subscription::class)->orderby('created_at', 'desc');
    }

    //user has active subscription
    public function memberActiveSubscription(){
        return $this->hasOne(Subscription::class, 'member_id', 'id')->where('is_expired', false);
    }
}
