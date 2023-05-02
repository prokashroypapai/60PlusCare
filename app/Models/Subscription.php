<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package_id',
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

    public function subscriptionUser(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function subscriptionPackage(){
        return $this->hasOne(Package::class, 'id', 'package_id');
    }
}
