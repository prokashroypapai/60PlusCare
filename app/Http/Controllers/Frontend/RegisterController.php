<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Request $request){
        if($request->package_id == ''){
            return view('frontend.widget.packageList');
        }

        $package = Package::where('id', $request->package_id)->first();

        if(!$package){
            return redirect('register');
        }

        return view('frontend.auth.register', compact('package'));
    }
}
