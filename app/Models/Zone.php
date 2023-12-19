<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = true;
    const STATUS_INACTIVE = false;

    protected $fillable = [
        'zone_name',
        'zone_slug',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function scopeActive()
    {
        return $this->where('status', true);
    }
}
