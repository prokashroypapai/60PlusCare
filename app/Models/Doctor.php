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
        'doctor_designation',
        'doctor_experience',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function scopeActive(){
        return $this->where('status', true);
    }

    public function doctorPicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }
}
