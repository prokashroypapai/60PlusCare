<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index($service_slug = null)
    {
        if ($service_slug == null) {
            return view('frontend.service.index');
        }
    }
}
