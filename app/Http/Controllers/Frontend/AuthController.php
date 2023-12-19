<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Seo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function login(){
        $page = Page::where('page_slug', 'login')->first();
        $metaseo = Seo::where('page_id', $page->id)->first();
        return view('frontend.auth.login', compact('metaseo'));
    }

    public function postlogin(Request $request){
        $this->validate($request, [
            'mobile' => 'required',
            'password' => 'required'
        ],[
            'mobile.required' => 'Mobile is required',
            'password.required' => 'Enter Password'
        ]);

        $mobile = '+91' . $request->get('mobile');
        $password = $request->get('password');

        if (Auth::attempt(['mobile' => $mobile , 'password' => $password])) {
            $user = Auth::user();

            if($user->status == false){
                return redirect('admin/logout');
            }
            if(in_array($user->permission, [User::PERMISSION_ADMIN, User::PERMISSION_MANAGER, User::PERMISSION_MEMBER])) {
                return redirect('/dashboard')->with('success', 'Logged In Successfully');
            }
            else{
                return redirect('logout');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Credentials Does not Match');
        }
    }

    public function logout(){
        Session::flush ();
        Auth::logout ();
        return redirect('login')->with('success', 'Logged Out Successfully');
    }
}
