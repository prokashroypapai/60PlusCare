<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'picture_id',
        'doctor_name',
        'doctor_slug',
        'doctor_designation',
        'doctor_association',
        'doctor_experience',
        'is_home',
        'status'
    ];

    protected $casts = [
        'is_home' => 'boolean',
        'status' => 'boolean'
    ];

    public function scopeActive(){
        return $this->where('status', true);
    }

    public function doctorPicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }
}
