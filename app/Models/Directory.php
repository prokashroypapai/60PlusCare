<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    use HasFactory;

    const STATUS_ACTIVE = true;
    const STATUS_INACTIVE = false;

    protected $fillable = [
        'category_id',
        'zone_id',
        'directory_name',
        'directory_value',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    //directory has category
    public function directoryCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    //directory has zone
    public function directoryZone()
    {
        return $this->hasOne(Zone::class, 'id', 'zone_id');
    }
}
