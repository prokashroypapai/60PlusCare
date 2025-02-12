<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Page;
use App\Models\Picture;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function index($slug = null){
        if($slug != null){
            $gallery = Gallery::where('gallery_slug', $slug)
                ->first();

            if(!$gallery){
                abort(404);
            }

            $metaseo = [
                'picture_id' => isset($gallery->galleryImages[0]) ? $gallery->galleryImages[0] : Picture::getDefaultImage()->id,
                'meta_title' => $gallery->gallery_name,
                'meta_description' => 'View ' . $gallery->gallery_name . ' pictures on 60 Plus Care',
                'meta_keywords' => '60plus care',
                'og_title' => $gallery->gallery_name,
                'og_description' => 'View ' . $gallery->gallery_name . ' pictures on 60 Plus Care',
            ];
            return view('frontend.gallery.show', compact('gallery', 'metaseo'));
        }
        else {
            $galleries = Gallery::active()->get();
            $page = Page::where('page_slug', 'gallery')->first();
            $metaseo = Seo::where('page_id', $page->id)->first();
            return view('frontend.gallery.index', compact('galleries', 'metaseo'));
        }
    }
}
