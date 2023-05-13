<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WelcomeController extends Controller
{
    public function contact(Request $request){
        $validator = Validator::make($request->all(),
            [
                'name' => 'required',
                'email' => 'required|email',
                'mobile' => 'required|digits:10',
                'comment' => 'required:min:10|max:1000'
            ], [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Email should be perfect',
                'mobile.required' => 'Mobile number is required',
                'mobile.digits' => 'Mobile number should be perfect',
                'description.required' => 'Details for booking is required',
                'comment.min' => 'Details should be minimum of 10 characters',
                'comment.max' => 'Details should be maximum of 1000 characters'
            ]
        );

        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'comment' => $request->comment
        ];

        $contact = Contact::create($data);

        if($contact) {
            return response()->json(['status' => 200, 'msg' => 'Successfully Saved']);
        }
        else{
            return response()->json(['status' => 404, 'msg' => 'Something went wrong']);
        }
    }
}
