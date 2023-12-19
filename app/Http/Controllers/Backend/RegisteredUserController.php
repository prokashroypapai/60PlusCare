<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\CreateRegistrationnoService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisteredUserController extends Controller
{
    //getting registered users
    public function index(){
        $users = User::where('permission', User::PERMISSION_MEMBER)
            ->paginate(10);

        return view('backend.registerUser.index', compact('users'));
    }

    public function create(){
        return view('backend.registerUser.create');
    }

    public function store(Request $request, CreateRegistrationnoService $createRegistrationnoService){
        $request->validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'mobile' => 'required|unique:users',
            'password' => 'required'
        ],[
            'name.required' => 'Name is required',
            'email.email' => 'Valid email is required',
            'email.unique' => 'Email already exists',
            'mobile.required' => 'Mobile number is required',
            'mobile.unique' => 'Mobile already exists',
            'password.required' => 'Password is required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'permission' => User::PERMISSION_MEMBER,
            'status' => User::STATUS_ACTIVE
        ];

        $user = User::create($data);

        $updateUser = $user->update([
            'registration_no' => $createRegistrationnoService->createRegistrationNumber($user->id, null)
        ]);

        if($updateUser){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $user = User::findorFail($id);
        return view('backend.registerUser.show', compact('user'));
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required',
            'email' => ['nullable','email',
                Rule::unique('users')->ignore($id),
            ],
            'mobile' => ['required',
                Rule::unique('users')->ignore($id),
            ]
        ],[
            'name.required' => 'Name is required',
            'email.email' => 'Valid email is required',
            'mobile.required' => 'Mobile number is required',
            'mobile.digits' => 'Valid Mobile number is required'
        ]);

        $user = User::findorFail($request->id);

        if($request->password == ""){
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => bcrypt($request->password),
                //permission tab
                'status' => $request->status
            ];
        }
        else{
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                //permission tab
                'status' => $request->status
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
        $user = User::findorFail($id);

        $delUser = $user->update([
            'status' => User::STATUS_INACTIVE
        ]);

        if($delUser){
            return redirect('admin/registeredUsers')->with('success', 'Updated successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
