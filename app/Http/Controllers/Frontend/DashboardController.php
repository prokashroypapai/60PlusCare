<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

        return view('frontend.dashboard.index', compact('user', 'subscriptions'));
    }
}
