<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    use HasFactory;

    protected $fillable = [
        'image_title',
        'image_alt',
        'image_full',
        'image_thumb',
        'image_small',
        'is_default',
        'status'
    ];

    protected $casts = [
        'is_default' => 'boolean',
        'status' => 'boolean'
    ];

    //get default image
    public static function getDefaultImage()
    {
        return Picture::where('is_default', true)->first();
    }
}
