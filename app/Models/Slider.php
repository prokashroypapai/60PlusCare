<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = true;
    const STATUS_INACTIVE = false;

    protected $fillable = [
        'picture_id', 'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function scopeActive()
    {
        return $this->where('status', Slider::STATUS_ACTIVE);
    }

    public function sliderPicture()
    {
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }
}
