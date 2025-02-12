<?php

namespace App\Http\Controllers\API;

use App\Events\AppointmentmailProcessed;
use App\Events\ContactmailProcessed;
use App\Http\Controllers\Controller;
use App\Models\Activity\Participant;
use App\Models\Appointment;
use App\Models\Contact;
use App\Models\Member;
use App\Models\Picture;
use App\Models\User;
use Carbon\Carbon;
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
                'comment.required' => 'Details is required',
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

        $data2 = array(
            'to_email' => 'care@60pluscare.in',
            'name' => $request->name
        );

        $sendEmail = event(new ContactmailProcessed($data2));

        if($sendEmail) {
            return response()->json(['status' => 200, 'msg' => 'Successfully Saved']);
        }
        else{
            return response()->json(['status' => 404, 'msg' => 'Something went wrong']);
        }
    }

    public function makeAppointment(Request $request){
        $validator = Validator::make($request->all(),
            [
                'service_type' => 'required|not_in:0',
                'name' => 'required',
                'email' => 'required|email',
                'mobile' => 'required|digits:10',
                'city' => 'required',
                'message' => 'required:min:10|max:1000'
            ], [
                'service_type.required' => 'Service is required',
                'service_type.not_in' => 'Service is required',
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Email should be perfect',
                'mobile.required' => 'Mobile number is required',
                'mobile.digits' => 'Mobile number should be perfect',
                'city.required' => 'City is required',
                'message.required' => 'Message is required',
                'message.min' => 'Message should be minimum of 10 characters',
                'message.max' => 'Message should be maximum of 1000 characters'
            ]
        );

        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }

        $data = [
            'service_type' => $request->service_type,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'city' => $request->city,
            'message' => $request->message
        ];

        $createAppointment = Appointment::create($data);

        $data2 = array(
            'to_email' => 'care@60pluscare.in',
            'name' => $request->name
        );

        $sendEmail = event(new AppointmentmailProcessed($data2));

        if($sendEmail) {
            return response()->json(['status' => 200, 'msg' => 'Successfully Saved']);
        }
        else{
            return response()->json(['status' => 404, 'msg' => 'Something went wrong']);
        }
    }

    public function userDetails(Request $request)
    {
        /*$validator = Validator::make($request->all(),
            [
                'userId' => 'required'
            ], [
                'userId.required' => 'User Id is required'
            ]
        );*/

        $validator = Validator::make($request->all(),
            [
                'registration_no' => 'required'
            ], [
                'registration_no.required' => 'Input is required'
            ]
        );

        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }

        $user = User::select('id', 'name', 'mobile', 'status')
            ->whereIn('mobile', [$request->registration_no, '+91' . $request->registration_no])
            ->orWhere('registration_no', $request->registration_no)
            ->first();

        if(!$user){
            return response()->json(['status' => 404, 'msg' => 'User not found', 'user' => null]);
        }

        $user = [
            'id' => $user->id,
            'name' => $user->name,
            'mobile' => $user->mobile
        ];

        return response()->json(['status' => 200, 'msg' => 'success', 'user' => $user]);
    }

    public function memberDetails(Request $request)
    {
        if($request->action == 'registrationNo') {
            $validator = Validator::make($request->all(),
                [
                    'registrationNo' => 'required'
                ], [
                    'registrationNo.required' => 'Registration No is required'
                ]
            );

            if ($validator->fails()) {
                return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
            }

            $getMember = Member::select('id', 'member_name', 'member_mobile', 'status')
                ->where('registration_no', $request->registrationNo)
                ->first();

            if (!$getMember || $getMember->status == Member::STATUS_INACTIVE) {
                return response()->json(['status' => 404, 'msg' => 'Member not found', 'user' => null]);
            }

            $member = [
                'id' => $getMember->id,
                'member_name' => $getMember->member_name,
                'member_mobile' => $getMember->member_mobile
            ];
        }

        else if($request->action == 'memberId') {

            //if get value registration no
            $validator = Validator::make($request->all(),
                [
                    'memberId' => 'required'
                ], [
                    'memberId.required' => 'Member ID is required'
                ]
            );

            if ($validator->fails()) {
                return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
            }

            $getMember = Member::select('id', 'registration_no', 'member_name', 'member_mobile', 'status')->where('id', $request->memberId)->first();

            if (!$getMember || $getMember->status == Member::STATUS_INACTIVE) {
                return response()->json(['status' => 404, 'msg' => 'Member not found', 'member' => null]);
            }

            $member = [
                'id' => $getMember->id,
                'registration_no' => $getMember->registration_no,
                'member_name' => $getMember->member_name,
                'member_mobile' => $getMember->member_mobile
            ];
        }
        else{
            $member = null;
        }

        return response()->json(['status' => 200, 'msg' => 'success', 'member' => $member]);
    }

    public function createParticipant(Request $request){
        $validator = Validator::make($request->all(),
            [
                'training_id' => 'required',
                'name' => 'required',
                'mobile' => 'required',
                'email' => 'required|email'
            ], [
                'training_id.required' => 'Training id is required',
                'name.required' => 'Name is required',
                'mobile.required' => 'Mobile number is required',
                'mobile.digits' => 'Mobile number should be perfect',
                'email.required' => 'Email is required',
                'email.email' => 'Email should be perfect'
            ]
        );

        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }

        $data = [
            'training_id' => $request->training_id,
            'picture_id' => Picture::getDefaultImage()->id,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'dob' => Carbon::parse($request->dob)->format('Y-m-d'),
            'age' => $request->age
        ];

        $participant = Participant::create($data);

        /*$data2 = array(
            'to_email' => 'care@60pluscare.in',
            'name' => $request->name
        );

        $sendEmail = event(new ContactmailProcessed($data2));*/

        if($participant) {
            return response()->json(['status' => 200, 'msg' => 'Successfully Saved']);
        }
        else{
            return response()->json(['status' => 404, 'msg' => 'Something went wrong']);
        }
    }

    public function getParticipants(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'mobile' => 'required|digits:10',
                'dob' => 'required'
            ], [
                'mobile.required' => 'Mobile number is required',
                'mobile.digits' => 'Mobile number should be perfect',
                'dob.required' => 'Date of birth is required'
            ]
        );

        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }

        $trainings = [];

        $participants = Participant::active()
            ->where('mobile', '+91' . $request->mobile)
            ->where('dob', Carbon::parse($request->dob)->format('Y-m-d'))
            ->where('is_eligible', Participant::ELIGIBLE_YES)
            ->get();

        if (count($participants) <= 0) {
            return response()->json(['status' => 404, 'msg' => 'No Certificate found', 'trainings' => null]);
        }

        foreach ($participants as $participant){
            $trainings[] = [
                'id' => $participant->id,
                'training_title' => $participant->participantTraining->training_title
            ];
        }

        if($participant) {
            return response()->json(['status' => 200, 'trainings' => $trainings, 'msg' => 'Successfully Found']);
        }
        else{
            return response()->json(['status' => 404, 'msg' => 'Something went wrong']);
        }
    }

    public function checkCertificateNo(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'certificate_no' => 'required'
            ], [
                'certificate_no.required' => 'checkCertificateNo is required'
            ]
        );

        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_error" => $validator->errors()]);
        }

        $getParticipant = Participant::active()
            ->where('certificate_no', $request->certificate_no)
            ->where('is_eligible', Participant::ELIGIBLE_YES)
            ->select('id', 'training_id', 'certificate_no', 'name')
            ->first();

        if (!$getParticipant) {
            return response()->json(['status' => 404, 'msg' => 'No Certificate found', 'participant' => null]);
        }

        $participant = [
            'id' => $getParticipant->id,
            'certificate_no' => $getParticipant->certificate_no,
            'name' => $getParticipant->name,
            'training_title' => $getParticipant->participantTraining->training_title,
            'training_location' => $getParticipant->participantTraining->training_location,
            'training_date' => Carbon::parse($getParticipant->participantTraining->training_date)->format('d-m-Y')
        ];


        if($participant) {
            return response()->json(['status' => 200, 'participant' => $participant, 'msg' => 'Successfully Found']);
        }
        else{
            return response()->json(['status' => 404, 'msg' => 'Something went wrong']);
        }
    }
}
