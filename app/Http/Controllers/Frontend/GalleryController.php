<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index($slug = null){
        if($slug != null){
            $gallery = Gallery::where('gallery_slug', $slug)->first();
            return view('frontend.gallery.show', compact('gallery'));
        }
        else {
            $galleries = Gallery::active()->get();
            return view('frontend.gallery.index', compact('galleries'));
        }
    }
}
