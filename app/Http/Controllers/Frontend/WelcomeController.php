<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Location;
use App\Models\Page;
use App\Models\Seo;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('frontend.home.index');
    }

    //all pages
    public function getpages($path, Request $request){
        $page = Page::where('page_slug', $path)->where('status', true)->first();

        if(!$path || !$page){
            abort(404);
        }

        if($path == 'doctors' && $request->id !=""){
            $doctor = Doctor::findorFail($request->id);
            return view('frontend.page.doctorDetails', compact('doctor'));
        }

        $metaseo = Seo::where('page_id', $page->id)->first();

        if($page->is_basic == true){
            $getView = 'frontend.page.index';
        }
        else {
            $getView = 'frontend.page.' . $page->page_slug;
        }

        return view($getView, compact('page', 'metaseo'));
    }

    public function location($location_slug = null){
        $location = Location::where('location_slug', $location_slug)->first();

        if(!$location){
            abort(404);
        }

        return view('frontend.location.index', compact('location'));
    }
}
