<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Profile;
use App\Models\Service\MembershipNumber;
use App\Models\User;
use App\Services\CreateRegistrationnoService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(Request $request){
        $getmembers = Member::select('id', 'user_id', 'registration_no', 'member_name', 'status');

        /*if($request->status == 'deleted'){
            $getmembers->where('is_deleted', true);
        }
        else{
            $getmembers->where('is_deleted', false);
        }*/

        if($request->mName && $request->mName != ""){
            $getmembers->where('member_name', 'like', "%$request->mName%")
                ->orWhere('registration_no', 'like', "%$request->mName%");
        }

        $members = $getmembers->paginate(10);

        return view('backend.member.index', compact('members'));
    }

    public function create(){
        return view('backend.member.create');
    }

    public function store(Request $request, CreateRegistrationnoService $createRegistrationnoService)
    {

        $request->validate([
            'user_id' => 'required|not_in:0',
            'name' => 'required',
            'mobile' => 'required'
        ],[
            'user_id.required' => 'User Id is required',
            'user_id.not_in' => 'User Id is required',
            'name.required' => 'Name is required',
            'mobile.required' => 'Mobile number is required'
        ]);

        if($request->is_policy == true){
            $request->validate([
                'policy_number' => 'required'
            ],[
                'policy_number.required' => 'Policy number is required'
            ]);
        }

        if($request->user_id == 'default'){
            $request->validate([
                'mobile' => 'unique:users'
            ],[
                'mobile.unique' => 'Mobile no already exists'
            ]);
        }

        if($request->user_id == 'default'){
            $userData = [
                'name' => $request->name,
                'mobile' => $request->mobile,
                'password' => bcrypt($request->password),
                'permission' => User::PERMISSION_MEMBER,
                'status' => User::STATUS_ACTIVE
            ];

            $user = User::create($userData);

            $userId = $user->id;
        }
        else{
            $userId = $request->user_id;
        }

        $memberData = [
            'user_id' => $userId,
            'registration_no' => $createRegistrationnoService->createRegistrationNumber($userId),
            'member_name' => $request->name,
            'member_mobile' => $request->mobile,
            'is_policy' => $request->is_policy,
            'policy_number' => $request->policy_number
        ];

        $createMember = Member::create($memberData);

        if($createMember){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $member = Member::findorFail($id);
        return view('backend.member.show', compact('member'));
    }

    public function update(Request $request)
    {
        //return $request->all();

        $request->validate([
            'member_name' => 'required',
            'member_mobile' => 'required'
        ],[
            'member_name.required' => 'Name is required',
            'member_mobile.required' => 'Mobile number is required'
        ]);

        $member = Member::where('id', $request->id)->first();

        if(!$member){
            return redirect()->back()->with('error', 'Something went wrong');
        }

        if($request->user_id != $member->user_id){

            $mNumber = MembershipNumber::where('registration_no', $request->registration_no)
                ->first();

            $mNumber->update([
                'user_id' => $request->user_id
            ]);
        }

        $data = [
            'user_id' => $request->user_id,
            'member_name' => $request->member_name,
            'member_mobile' => $request->member_mobile,
            'status' => $request->status
        ];

        $updateMember = $member->update($data);

        if($updateMember){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id){
        $member = Member::where('id', $id)->first();

        $delMember = $member->update([
            'is_deleted' => true
        ]);

        if($delMember){
            return redirect('admin/members')->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function restore($id){
        $member = Member::where('id', $id)->first();

        $resMember = $member->update([
            'is_deleted' => false
        ]);

        if($resMember){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function subscriptions($id)
    {
        $member = Member::findorFail($id);
        return view('backend.member.memberSubscriptions', compact('member'));
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

        $member = Member::where('id', $request->member_id)->first();

        if(!$member){
            return redirect()->back()->with('error', 'Something went wrong');
        }

        $dob = $request->dob != "" ? Carbon::parse($request->dob)->format('Y-m-d') : null;
        $spouse_dob = $request->spouse_dob != "" ? Carbon::parse($request->spouse_dob)->format('Y-m-d') : null;
        $anniversary_date = $request->anniversary_date != "" ? Carbon::parse($request->anniversary_date)->format('Y-m-d') : null;

        $data = [
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

        $updateMember = $member->update($data);

        if($updateMember){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
