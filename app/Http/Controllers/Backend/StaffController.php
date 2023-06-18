<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StaffController extends Controller
{
    public function index(){
        $users = User::whereIn('permission', [0,1])->paginate(10);
        return view('backend.staff.index', compact('users'));
    }

    public function create(){
        return view('backend.staff.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'mobile' => 'required',
            'password' => 'required',
            'permission' => 'required'
        ],[
            'name.required' => 'Name is required',
            'email.email' => 'Valid email is required',
            'email.unique' => 'Email already exists',
            'mobile.required' => 'Mobile number is required',
            'password.required' => 'Password is required',
            'permission.required' => 'Permission is required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'permission' => $request->permission,
            'status' => User::STATUS_ACTIVE
        ];

        $user = User::create($data);

        if($user){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $user = User::findorFail($id);
        return view('backend.staff.show', compact('user'));
    }

    public function update(Request $request){
        $id = $request->id;

        $request->validate([
            'name' => 'required',
            'email' => ['nullable',
                Rule::unique('users')->ignore($id),
            ],
            'mobile' => ['required',
                Rule::unique('users')->ignore($id),
            ],
            'permission' => 'required'
        ],[
            'email.unique' => 'Email is already exists',
            'mobile.required' => 'Mobile is required',
            'mobile.unique' => 'Mobile number already exists',
            'permission.required' => 'Permission is required'
        ]);

        $user = User::findorFail($request->id);

        if($request->password != ""){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => bcrypt($request->password),
                'permission' => $request->permission,
                'status' => User::STATUS_ACTIVE
            ];
        }
        else{
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'permission' => $request->permission,
                'status' => User::STATUS_ACTIVE
            ];
        }

        $updateUser = $user->update($data);

        if($updateUser){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id){
        //
    }
}
