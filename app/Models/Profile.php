<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'alternate_no',
        'registration_no',
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
        'sponsored_by'
    ];

    protected $casts = [
        //'dob' => 'date:Y-m-d'
        'is_policy' => 'boolean',
        'is_medical_allergy' => 'boolean'
    ];
}
