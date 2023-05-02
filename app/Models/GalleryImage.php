<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $fillable = [
        'picture_id',
        'gallery_id',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function GalleryPicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }
}
