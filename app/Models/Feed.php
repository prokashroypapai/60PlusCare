<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'picture_id',
        'user_id',
        'url',
        'summary',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function scopeActive(){
        return $this->where('status', true);
    }

    public function feedPicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }

    public function feedUser(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
