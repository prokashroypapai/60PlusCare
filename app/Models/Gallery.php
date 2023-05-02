<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'gallery_name',
        'gallery_slug',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function galleryImages(){
        return $this->hasMany(GalleryImage::class);
    }
}
