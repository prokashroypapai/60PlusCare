<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Seo;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($service_slug = null)
    {
        if ($service_slug == null) {
            $page = Page::where('page_slug', 'services')->first();
            $metaseo = Seo::where('page_id', $page->id)->first();

            return view('frontend.service.index', compact('metaseo'));
        }
        else{
            //temp path
            if(in_array($service_slug, ['physiotherapy', 'diet-nutrition'])){
                return redirect($service_slug);
            }
            //temp path

            $service = Service::where('service_slug', $service_slug)->first();
            $metaseo = Seo::where('service_id', $service->id)->first();

            $myView = 'frontend.service.' . $service_slug;
            return view($myView, compact('metaseo'));
        }
    }
}
