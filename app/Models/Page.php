<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_title',
        'page_slug',
        'description',
        'is_basic',
        'is_writable',
        'status'
    ];

    protected $casts = [
        'is_basic' => 'boolean',
        'is_writable' => 'boolean',
        'status' => 'boolean'
    ];

    //page has seo
    public function pageSeo(){
        return $this->hasOne(Seo::class);
    }
}
