<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'picture_id',
        'name',
        'designation',
        'comment',
        'rating',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function scopeActive(){
        return $this->where('status', true);
    }

    public function testimonialPicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }
}
