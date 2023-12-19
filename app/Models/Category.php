<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = true;
    const STATUS_INACTIVE = false;

    protected $fillable = [
        'picture_id',
        'category_name',
        'category_slug',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function scopeActive(){
        return $this->where('status', true);
    }

    public function categoryPicture()
    {
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }
}
