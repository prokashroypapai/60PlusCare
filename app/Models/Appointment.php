<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = true;
    const STATUS_INACTIVE = false;

    protected $fillable = [
        'service_type',
        'name',
        'mobile',
        'email',
        'city',
        'message',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
