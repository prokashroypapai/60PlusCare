<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'picture_id',
        'clinic_name',
        'clinic_slug',
        'clinic_address',
        'clinic_description',
        'clinic_map',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function scopeActive(){
        return $this->where('status', true);
    }

    //clinic has picture
    public function clinicPicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }

    //clinic has seo
    public function clinicSeo(){
        return $this->hasOne(Seo::class);
    }
}
