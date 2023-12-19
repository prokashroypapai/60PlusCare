<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Page;
use App\Models\Seo;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Request $request){
        /*if($request->package_id == ''){
            return view('frontend.widget.packageList');
        }

        $package = Package::where('id', $request->package_id)->first();

        if(!$package){
            return redirect('register');
        }*/

        $package= [
            'id' => 1,
            'package_name' => 'Package'
        ];

        $page = Page::where('page_slug', 'register')->first();
        $metaseo = Seo::where('page_id', $page->id)->first();
        return view('frontend.auth.register-2', compact('package', 'metaseo'));
    }
}
