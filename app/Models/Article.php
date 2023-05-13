<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'picture_id',
        'user_id',
        'posted_at',
        'title',
        'slug',
        'description',
        'num_of_views',
        'status'
    ];

    protected $casts = [
        'posted_at' => 'datetime',
        'status' => 'boolean'
    ];

    public function scopeActive(){
        return $this->where('status', true);
    }

    public function articlePicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }

    public function articleUser(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
