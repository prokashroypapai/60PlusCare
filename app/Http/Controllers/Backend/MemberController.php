<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Service\MembershipNumber;
use App\Models\User;
use App\Services\CreateRegistrationnoService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $members = User::where('permission', User::PERMISSION_MEMBER)->paginate(10);
        return view('backend.member.index', compact('members'));
    }

    public function create(){
        return view('backend.member.create');
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

        $is_valid = 0;

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => bcrypt($request->password),
            'permission' => User::PERMISSION_MEMBER,
            'status' => User::STATUS_ACTIVE
        ];

        $user = User::create($data);

        if($is_valid == 1) {
            Profile::create([
                'user_id' => $user->id,
            ]);
        }else{
            Profile::create([
                'user_id' => $user->id,
                'registration_no' => $createRegistrationnoService->createRegistrationNumber($user->id)
            ]);
        }

        if($user){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $user = User::findorFail($id);
        return view('backend.member.show', compact('user'));
    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'email',
            'mobile' => 'required|digits:10',
            'permission' => 'required'
        ],[
            'name.required' => 'Name is required',
            'email.email' => 'Valid email is required',
            'mobile.required' => 'Mobile number is required',
            'mobile.digits' => 'Valid Mobile number is required',
            'permission.required' => 'Permission is required'
        ]);

        $user = User::findorFail($request->id);

        if($request->password == ""){
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

    public function memberProfileUpdate(Request $request){
        /*$request->validate([
            'user_id' => 'required',
            'registration_no' => 'required',
            'is_policy' => 'required',
            'is_medical_allergy' => 'required',
            'id_type' => 'required|not_in:0',
            'id_no' => 'required',
            'dob' => 'required',
            'gender' => 'required|not_in:0',
            'marital_status' => 'required|not_in:0',
            'spouse_name' => 'required',
            'spouse_dob' => 'required',
            'children_no' => 'required',
            'address' => 'required',
            'city' => 'required',
            'pin_code' => 'required',
            'police_station' => 'required',
            'staying_with' => 'required|not_in:0',
            'location_type' => 'required|not_in:0',
            'security_available' => 'required|not_in:0',
            'blood_group' => 'required',
            'medical_condition' => 'required',
            'hospitalization_history' => 'required',
            'personal_doctor_details' => 'required',
            'sponsored_by' => 'required|not_in:0'
        ]);*/

        $user = User::where('id', $request->user_id)->first();

        $dob = $request->dob != "" ? Carbon::parse($request->dob)->format('Y-m-d') : null;
        $spouse_dob = $request->spouse_dob != "" ? Carbon::parse($request->spouse_dob)->format('Y-m-d') : null;
        $anniversary_date = $request->anniversary_date != "" ? Carbon::parse($request->anniversary_date)->format('Y-m-d') : null;

        $data = [
            'alternate_no' => $request->alternate_no,
            /*'registration_no' => $request->registration_no,*/
            'is_policy' => $request->is_policy,
            'policy_number' => $request->policy_number,
            'is_medical_allergy' => $request->is_medical_allergy,
            'id_type' => $request->id_type,
            'id_no' => $request->id_no,
            'dob' => $dob,
            'gender' => $request->gender,
            'marital_status' => $request->marital_status,
            'spouse_name' => $request->spouse_name,
            'spouse_dob' => $spouse_dob,
            'children_no' => $request->children_no,
            'anniversary_date' => $anniversary_date,
            'address' => $request->address,
            'city' => $request->city,
            'pin_code' => $request->pin_code,
            'police_station' => $request->police_station,
            'gmail_id' => $request->gmail_id,
            'facebook_id' => $request->facebook_id,
            'staying_with' => $request->staying_with,
            'location_type' => $request->location_type,
            'security_available' => $request->security_available,
            'blood_group' => $request->blood_group,
            'medical_condition' => $request->medical_condition,
            'hospitalization_history' => $request->hospitalization_history,
            'personal_doctor_details' => $request->personal_doctor_details,
            'sponsored_by' => $request->sponsored_by
        ];

        $updateUser = $user->userProfile->update($data);

        if($updateUser){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
