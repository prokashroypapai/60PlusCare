<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Page;
use App\Models\Picture;
use App\Models\Seo;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //all doctors
    public function index()
    {
        $page = Page::where('page_slug', 'doctors')->first();
        $metaseo = Seo::where('page_id', $page->id)->first();

        return view('frontend.doctor.index', compact('metaseo'));
    }

    //doctor details
    public function show($doctor_slug = null)
    {
        $doctor = Doctor::where('doctor_slug', $doctor_slug)
            ->first();

        if(!$doctor){
            abort(404);
        }

        $metaseo = [
            'picture_id' => isset($doctor->picture_id) ? $doctor->picture_id : Picture::getDefaultImage()->id,
            'meta_title' => $doctor->doctor_name . ' on 60 Plus Care',
            'meta_description' => 'View ' . $doctor->doctor_name . ' on 60 Plus Care',
            'meta_keywords' => '60plus care',
            'og_title' => $doctor->doctor_name . ' on 60 Plus Care',
            'og_description' => 'View ' . $doctor->doctor_name . ' on 60 Plus Care',
        ];

        return view('frontend.doctor.show', compact('doctor', 'metaseo'));
    }
}
