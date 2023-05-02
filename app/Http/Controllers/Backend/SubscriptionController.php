<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        $subscriptions = Subscription::paginate(10);
        return view('backend.subscription.index', compact('subscriptions'));
    }

    public function create(){
        return view('backend.subscription.create');
    }

    public function store(Request $request){
        $request->validate([
            'user_id' => 'required|not_in:0',
            'package_id' => 'required|not_in:0'
        ],[
            'user_id.required' => 'Member is required',
            'package_id.required' => 'Package Name is required',
            'package_id.not_in' => 'Package Name is required'
        ]);

        $package = Package::where('id', $request->package_id)->first();

        $start_date = Carbon::now();
        $end_date = Carbon::now()->addDays($package->num_days);

        $data = [
            'user_id' => $request->user_id,
            'package_id' => $request->package_id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'num_of_days' => $package->num_days
        ];

        $subscription = Subscription::create($data);

        if($subscription){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $subscription = Subscription::findorFail($id);
        return view('backend.subscription.show', compact('subscription'));
    }

    public function update(Request $request){
        return redirect()->back()->with('error', 'Something went wrong');
    }

    public function delete($id, $user_id = null){
        $delSubscription = Subscription::where('id', $id)->delete();
        if($user_id == null){
            return redirect('admin/subscriptions')->with('success', 'Deleted');
        }
        else {
            return redirect('admin/subscription/user/' . $user_id)->with('success', 'Deleted');
        }
    }

    public function subscriptionUser($user_id){
        $user = User::findorFail($user_id);
        return view('backend.subscription.subscriptionUser', compact('user'));
    }
}
