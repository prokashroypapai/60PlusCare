<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity\Training;
use App\Models\Member;
use App\Models\Profile;
use App\Models\Service\MembershipNumber;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home(Request $request){
        /*if($request->type == 'userRegister') {
            return $this->transferUserData();
        }
        if($request->type == 'memberRegister') {
            return $this->transferMemberData();
        }*/

        $this->checkTrainingExpiry();

        return view('backend.dashboard.index');
    }

    public function transferUserData(){
        $profiles = Profile::select('id', 'user_id', 'registration_no')->get();

        foreach ($profiles as $profile){
            $user = User::where('id', $profile->user_id)->first();

            $user->update([
                'registration_no' => $profile->registration_no
            ]);
        }

        return 'yes';
    }

    public function transferMemberData(){
        $users = User::select('id', 'registration_no', 'name', 'mobile')->where('permission', User::PERMISSION_MEMBER)->get();

        foreach ($users as $user){
            $memberData = [
                'user_id' => $user->id,
                'registration_no' => $user->registration_no,
                'member_name' => $user->name,
                'member_mobile' => $user->mobile,
                'is_policy' => false,
                'policy_number' => null,
                'status' => Member::STATUS_ACTIVE
            ];

            $createMember = Member::create($memberData);

            $mNumber = MembershipNumber::where('user_id', $user->id)->update([
                'member_id' => $createMember->id
            ]);
        }

        return 'yes';
    }

    public function checkTrainingExpiry()
    {
        $getTrainings = Training::select('id', 'date_expiry', 'is_expired', 'status')->get();
        foreach($getTrainings as $getTraining){
            $now = Carbon::now();
            $expiry_date = Carbon::parse($getTraining->date_expiry);
            if($now > $expiry_date){
                $getTraining->update(['is_expired' => Training::EXPIRED_YES]);
            }
        }

        return true;
    }
}
