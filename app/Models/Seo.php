<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    protected $fillable = [
        'picture_id',
        'page_id',
        'service_id',
        'clinic_id',
        'article_id',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'og_title',
        'og_description',
        'og_image'
    ];

    public $timestamps = false;

    //seo has picture
    public function seoPicture(){
        return $this->hasOne(Picture::class, 'id', 'picture_id');
    }
}
