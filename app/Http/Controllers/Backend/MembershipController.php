<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use App\Models\Package;
use App\Models\Profile;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index(){
        $memberships = Membership::active()->paginate(10);
        return view('backend.membership.index', compact('memberships'));
    }

    public function show($id){
        $membership = Membership::findorFail($id);
        return view('backend.membership.show', compact('membership'));
    }

    public function action($id, $action){
        $membership = Membership::findorFail($id);

        if(!in_array($action, ['accept','reject'])){
            abort(404);
        }

        if($action == 'accept'){
            $user = User::create([
                'name' => $membership->name,
                'mobile' => $membership->mobile,
                'email' => $membership->email,
                'password' => bcrypt(User::defaultPassword),
                'permission' => User::PERMISSION_MEMBER,
                'status' => User::STATUS_ACTIVE
            ]);

            $userProfile = Profile::create([
                'user_id' => $user->id,
                'city' => $membership->city
            ]);

            $package = Package::where('id', $membership->package_id)->first();
            $start_date = Carbon::now();
            $end_date = Carbon::now()->addDays($package->num_days);

            $data = [
                'user_id' => $user->id,
                'package_id' => $package->id,
                'start_date' => $start_date,
                'end_date' => $end_date,
                'num_of_days' => $package->num_days
            ];

            $subscription = Subscription::create($data);

            if($subscription){
                $membership->update([
                    'action' => Membership::STATUS_REJECTED,
                    'status' => Membership::STATUS_INACTIVE
                ]);
            }
        }
        if($action == 'reject'){
            $membership->update([
                'action' => Membership::STATUS_REJECTED,
                'status' => Membership::STATUS_INACTIVE
            ]);
        }

        return redirect()->back()->with('success', 'Saved successfully');
    }

    public function update(Request $request){
        //
    }
}
