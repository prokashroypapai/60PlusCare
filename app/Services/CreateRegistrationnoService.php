<?php


namespace App\Services;

use App\Models\Service\MembershipNumber;
use App\Models\User;

class CreateRegistrationnoService
{
    public function createRegistrationNumber($user_id){
        $prefix = MembershipNumber::REGISTRATION_PREFIX;

        $lastNumber = MembershipNumber::orderby('id', 'desc')->first();

        $UniqueNo = isset($lastNumber->unique_no) ? $lastNumber->unique_no + 1 : 10001;

        $registration_no = $prefix . $UniqueNo;

        $user = User::where('id', $user_id)->first();

        $membershipNumber = new MembershipNumber;
        $membershipNumber->user_id = $user_id;
        $membershipNumber->registration_no = $registration_no;
        $membershipNumber->unique_no = $UniqueNo;
        $membershipNumber->save();

        /*$user->userProfile->update([
            'registration_no' => $registration_no
        ]);*/

        return $registration_no;
    }
}
