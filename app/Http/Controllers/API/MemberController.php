<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MemberController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(),
            [
                'package_id' => 'required',
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
            'package_id' => $request->package_id,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => '+91' . $request->mobile,
            'city' => $request->city,
            'status' => Membership::STATUS_ACTIVE
        ];

        $membership = Membership::create($data);

        if($membership) {
            return response()->json(['status' => 200, 'msg' => 'Successfully Saved']);
        }
        else{
            return response()->json(['status' => 404, 'msg' => 'Something went wrong']);
        }
    }
}
