<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();

        $subscriptions = [];
        foreach ($user->userActiveSubscriptions as $sub){
            $subscriptions[] = $sub->package_id;
        }

        //return $subscriptions;

        $metaseo = [
            'picture_id' => Picture::getDefaultImage()->id,
            'meta_title' => 'Dashboard | 60 Plus Care',
            'meta_description' => 'Dashboard | 60 Plus Care',
            'meta_keywords' => '60plus care',
            'og_title' => 'Dashboard | 60 Plus Care',
            'og_description' => 'Dashboard | 60 Plus Care',
        ];

        return view('frontend.dashboard.index', compact('user', 'subscriptions', 'metaseo'));
    }
}
