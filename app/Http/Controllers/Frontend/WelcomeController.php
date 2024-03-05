<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\Doctor;
use App\Models\Location;
use App\Models\Page;
use App\Models\Picture;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WelcomeController extends Controller
{
    public function index(Request $request){
        $page = Page::where('page_slug', '/')->first();
        $metaseo = Seo::where('page_id', $page->id)->first();
        return view('frontend.home.index', compact('metaseo'));
    }

    public function appointment(){
        $page = Page::where('page_slug', 'schedule-an-appointment')->first();
        $metaseo = Seo::where('page_id', $page->id)->first();
        return view('frontend.page.appointment', compact('metaseo'));
    }

    //all pages
    public function getpages($path, Request $request){
        $page = Page::where('page_slug', $path)->where('status', true)->first();

        if(!$path || !$page){
            abort(404);
        }

        $metaseo = Seo::where('page_id', $page->id)->first();

        if(!$metaseo){
            $metaseo = [
                'picture_id' => Picture::getDefaultImage()->id,
                'meta_title' => '60 Plus Care',
                'meta_description' => 'Details about 60 Plus Care',
                'meta_keywords' => '60 plus care',
                'og_title' => '60 Plus Care',
                'og_description' => 'Details about 60 Plus Care'
            ];
        }

        if($path == 'doctors' && $request->id !=""){
            $doctor = Doctor::findorFail($request->id);
            $metaseo = [
                'picture_id' => isset($doctor->picture_id) ? $doctor->picture_id : Picture::getDefaultImage()->id,
                'meta_title' => $doctor->doctor_name . ' on 60 Plus Care',
                'meta_description' => 'View ' . $doctor->doctor_name . ' on 60 Plus Care',
                'meta_keywords' => '60plus care',
                'og_title' => $doctor->doctor_name . ' on 60 Plus Care',
                'og_description' => 'View ' . $doctor->doctor_name . ' on 60 Plus Care',
            ];
            return view('frontend.page.doctorDetails', compact('doctor', 'metaseo'));
        }

        if($page->is_basic == true){
            $getView = 'frontend2.page.index';
        }
        else {
            $getView = 'frontend.page.' . $page->page_slug;
        }

        return view($getView, compact('page', 'metaseo'));
    }

    /*public function location($location_slug = null){
        $location = Location::where('location_slug', $location_slug)->first();

        if(!$location){
            abort(404);
        }

        $metaseo = Seo::where('location_id', $location->id)->first();

        return view('frontend.location.index', compact('location', 'metaseo'));
    }*/

    public function clinics()
    {
        $page = Page::where('page_slug', 'clinics')->first();
        $metaseo = Seo::where('page_id', $page->id)->first();

        return view('frontend.clinic.index', compact('metaseo'));
    }

    public function clinic($clinic_slug = null){
        $clinic = Clinic::where('clinic_slug', $clinic_slug)->first();

        if(!$clinic){
            abort(404);
        }

        $metaseo = Seo::where('clinic_id', $clinic->id)->first();

        return view('frontend.clinic.show', compact('clinic', 'metaseo'));
    }

    public function loadNoticeBoard($type){
        if($type == 'mobile'){
            return view('frontend.home.mobileNoticeBoard');
        }
        else{
            return view('frontend.home.desktopNoticeboard');
        }
    }
}
