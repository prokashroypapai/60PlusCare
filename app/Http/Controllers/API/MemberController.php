<?php

namespace App\Http\Controllers\API;

use App\Events\RegistermailProcessed;
use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Membership;
use App\Models\User;
use App\Services\CreateRegistrationnoService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(),
            [
                /*'package_id' => 'required',*/
                'name' => 'required',
                'email' => 'required|email',
                'mobile' => 'required|digits:10',
                'city' => 'required'
            ], [
                'package_id.required' => 'Package Id is required',
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Email should be perfect',
                'mobile.required' => 'Mobile number is required',
                'mobile.digits' => 'Mobile number should be perfect',
                'city.required' => 'City is required'
            ]
        );

        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }

        $data = [
            /*'package_id' => $request->package_id,*/
            'package_id' => null,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => '+91' . $request->mobile,
            'city' => $request->city,
            'status' => Membership::STATUS_ACTIVE
        ];

        $membership = Membership::create($data);

        $data2 = array(
            'to_email' => 'care@60pluscare.in',
            'name' => $request->name
        );

        $sendEmail = event(new RegistermailProcessed($data2));

        if($sendEmail) {
            return response()->json(['status' => 200, 'msg' => 'Successfully Saved']);
        }
        else{
            return response()->json(['status' => 404, 'msg' => 'Something went wrong']);
        }
    }

    public function createMember(Request $request, CreateRegistrationnoService $createRegistrationnoService)
    {
        //return $request->all();

        if($request->is_default_parent == 'false') {
            $validator = Validator::make($request->all(),
                [
                    'userId' => 'required|not_in:default',
                    'userType' => 'required',
                    'name' => 'required',
                    'mobile' => 'required|not_in:+91',
                    'is_policy' => 'required',
                    'policy_number' => 'required_if:is_policy,==,1'
                ], [
                    'userId.required' => 'Please enter data',
                    'userId.not_in' => 'Please enter data',
                    'userType.required' => 'User Type is required',
                    'name.required' => 'Name is required',
                    'email.email' => 'Email should be perfect',
                    'mobile.required' => 'Mobile number is required',
                    'mobile.not_in' => 'Mobile number is required',
                    'is_policy.required' => 'Policy is required',
                    'policy_number.required_if' => 'Policy number is required'
                ]
            );
            if($request->userType == 'self'){
                $validator = Validator::make($request->all(),
                    [
                        'registration_no' => 'unique:members'
                    ], [
                        'registration_no.unique' => 'Member already exists'
                    ]
                );
            }
        }
        else{
            $validator = Validator::make($request->all(),
                [
                    'name' => 'required',
                    'mobile' => 'required|not_in:+91|unique:users',
                    'is_policy' => 'required',
                    'policy_number' => 'required_if:is_policy,==,1'
                ], [
                    'name.required' => 'Name is required',
                    'email.email' => 'Email should be perfect',
                    'mobile.required' => 'Mobile number is required',
                    'mobile.not_in' => 'Mobile number is required',
                    'mobile.unique' => 'Mobile number already exists',
                    'is_policy.required' => 'Policy is required',
                    'policy_number.required_if' => 'Policy number is required'
                ]
            );
        }

        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }

        $memberData = [
            'user_id' => null,
            'registration_no' => null,
            'member_name' => $request->name,
            'member_mobile' => $request->mobile,
            'is_policy' => $request->is_policy,
            'policy_number' => $request->policy_number,
            'status' => Member::STATUS_ACTIVE
        ];

        $createMember = Member::create($memberData);
        $getMember = Member::where('id', $createMember->id)->first();

        if($request->is_default_parent == 'true') {
            $userData = [
                'name' => $request->name,
                'email' => null,
                'mobile' => $request->mobile,
                'password' => bcrypt(User::defaultPassword),
                'permission' => User::PERMISSION_MEMBER,
                'status' => User::STATUS_ACTIVE
            ];

            $newUser = User::create($userData);

            $registrationNo = $createRegistrationnoService->createRegistrationNumber($newUser->id, null);

            $updateUser = $newUser->update([
                'registration_no' => $registrationNo
            ]);

            $userId = $newUser->id;
        }
        else{
            if($request->userType == 'self'){
                $user = User::select('id', 'registration_no')->where('id', $request->userId)->first();
                $userId = $user->id;
                $registrationNo = $user->registration_no;
            }
            if($request->userType == 'family_member'){
                $userId = $request->userId;
                $registrationNo = $createRegistrationnoService->createRegistrationNumber($userId, $getMember->id);
            }
        }

        $updateMember = $getMember->update([
            'user_id' => $userId,
            'registration_no' => $registrationNo
        ]);

        if($updateMember) {
            return response()->json(['status' => 200, 'msg' => 'Successfully Saved']);
        }
        else{
            return response()->json(['status' => 404, 'msg' => 'Something went wrong']);
        }
    }
}
