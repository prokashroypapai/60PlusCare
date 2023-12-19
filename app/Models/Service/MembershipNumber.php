<?php

namespace App\Models\Service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipNumber extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'registration_no',
        'unique_no'
    ];

    const REGISTRATION_PREFIX = 'SPC';
}
