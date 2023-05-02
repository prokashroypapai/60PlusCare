<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{
    public function login(){
        return view('backend.auth.login');
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
            if(in_array($user->permission, [User::PERMISSION_ADMIN, User::PERMISSION_MANAGER])) {
                return redirect('/admin')->with('success', 'Logged In Successfully');
            }
            else{
                return redirect('admin/logout');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Credentials Does not Match');
        }
    }

    public function register(){
        return view('backend.auth.register');
    }

    public function postregister(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|digits:10',
            'password' => 'required'
        ],[
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not correct',
            'mobile.required' => 'Mobile is required',
            'mobile.digits' => 'Mobile is not correct',
            'password.required' => 'Password is required'
        ]);

        $mobile = '+91' . $request->get('mobile');

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $mobile,
            'password' => bcrypt($request->password),
            'permission' => User::PERMISSION_ADMIN,
            'status' => User::STATUS_ACTIVE
        ];

        $user = User::create($data);

        if ($user) {
            return redirect('admin/login');
        }
        else
        {
            return redirect()->back()->with('error', 'Error');
        }
    }

    public function logout(){
        Session::flush ();
        Auth::logout ();
        return redirect('admin/login')->with('success', 'Logged Out Successfully');
    }
}
