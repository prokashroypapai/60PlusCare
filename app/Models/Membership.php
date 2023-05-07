<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    const STATUS_ACCEPTED = 1;
    const STATUS_REJECTED = 0;

    protected $fillable = [
        'package_id',
        'name',
        'mobile',
        'email',
        'city',
        'action',
        'status'
    ];

    protected $casts = [
        'action' => 'boolean',
        'status' => 'boolean'
    ];

    public function scopeActive(){
        return $this->where('status', true);
    }

    public function membershipPackage(){
        return $this->hasOne(Package::class, 'id', 'package_id');
    }
}
