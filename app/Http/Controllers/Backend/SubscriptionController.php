<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Package;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index(){
        $subscriptions = Subscription::active()->where('is_expired', Subscription::EXPIRED_NO)->paginate(10);
        return view('backend.subscription.index', compact('subscriptions'));
    }

    public function create(){
        return view('backend.subscription.create');
    }

    public function store(Request $request){
        $request->validate([
            'member_id' => 'required|not_in:0',
            'package_id' => 'required|not_in:0',
            'num_months' => 'numeric|min:1|max:36',
            'start_date' => 'required|date_format:d-m-Y'
        ],[
            'member_id.required' => 'Member is required',
            'member_id.not_in' => 'Member is required',
            'package_id.required' => 'Package Name is required',
            'package_id.not_in' => 'Package Name is required',
            'num_months.numeric' => 'Enter valid data',
            'num_months.min' => 'Minimum 1 month is required',
            'num_months.max' => 'Maximum 36 months is required',
            'start_date.required' => 'Start Date is required',
            'start_date.date_format' => 'Format is wrong (correct: d-m-y)',
        ]);

        $startDate = Carbon::parse($request->start_date)->format('Y-m-d');

        $numMonths = $request->num_months;

        $numDays = $numMonths * 30;

        if($request->end_date == "") {
            $endDate = Carbon::parse($startDate)->addDays($numDays - 1);
        }
        else{
            $endDate = Carbon::parse($request->end_date)->format('Y-m-d');
        }

        $package = Package::where('id', $request->package_id)->first();

        if(!$package){
            return redirect()->back()->with('error', 'Package not found');
        }

        $member = Member::where('id', $request->member_id)->first();

        if(!$member){
            return redirect()->back()->with('error', 'Member not found');
        }

        $data = [
            'user_id' => $member->user_id,
            'member_id' => $member->id,
            'package_id' => $request->package_id,
            'num_months' => $request->num_months,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'num_of_days' => $numDays,
            'is_expired' => Subscription::EXPIRED_NO,
            'status' => Subscription::STATUS_ACTIVE
        ];

        $createSubscription = Subscription::create($data);

        if($createSubscription){
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
        $request->validate([
            'member_id' => 'required|not_in:0',
            'package_id' => 'required|not_in:0',
            'num_months' => 'numeric|min:1|max:36',
            'start_date' => 'required|date_format:d-m-Y',
            'is_expired' => 'required'
        ],[
            'member_id.required' => 'Member is required',
            'member_id.not_in' => 'Member is required',
            'package_id.required' => 'Package Name is required',
            'package_id.not_in' => 'Package Name is required',
            'num_months.numeric' => 'Enter valid data',
            'num_months.min' => 'Minimum 1 month is required',
            'num_months.max' => 'Maximum 36 months is required',
            'start_date.required' => 'Start Date is required',
            'start_date.date_format' => 'Format is wrong (correct: d-m-y)',
            'is_expired.required' => 'Select expiry status'
        ]);

        $subscription = Subscription::where('id', $request->id)->first();

        if(!$subscription){
            return redirect()->back()->with('error', 'Subscription not found');
        }

        $startDate = Carbon::parse($request->start_date)->format('Y-m-d');

        $numMonths = $request->num_months;

        $numDays = $numMonths * 30;

        $endDate = Carbon::parse($startDate)->addDays($numDays - 1);

        $package = Package::where('id', $request->package_id)->first();

        if(!$package){
            return redirect()->back()->with('error', 'Package not found');
        }

        $member = Member::where('id', $request->member_id)->first();

        if(!$member){
            return redirect()->back()->with('error', 'Member not found');
        }

        $data = [
            'package_id' => $request->package_id,
            'num_months' => $request->num_months,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'num_of_days' => $numDays,
            'is_expired' => Subscription::EXPIRED_NO
        ];

        $updateSubscription = $subscription->update($data);

        if($updateSubscription){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id){
        $getSubscription = Subscription::where('id', $id)->first();

        if(!$getSubscription){
            return redirect()->back()->with('error', 'Subscription not found');
        }

        $delSubscription = $getSubscription->update([
            'status' => Subscription::STATUS_INACTIVE
        ]);

        if($delSubscription){
            return redirect('admin/subscriptions')->with('success', 'Deleted');
        }
        else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function subscriptionUser($user_id){
        $user = User::findorFail($user_id);
        return view('backend.subscription.subscriptionUser', compact('user'));
    }
}
