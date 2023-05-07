<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index(){
        $packages = Package::paginate(10);
        return view('backend.package.index', compact('packages'));
    }

    public function create(){
        return view('backend.package.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService){
        $request->validate([
            'package_name' => 'required|unique:packages',
            'package_price' => 'required',
            'package_price_duration' => 'required|not_in:0',
            'package_details' => 'required',
            'num_days' => 'required'
        ],[
            'package_name.required' => 'Package Name is required',
            'package_name.unique' => 'Package Name is required',
            'package_price.required' => 'Package price is required',
            'package_price_duration.required' => 'Duration is required',
            'package_price_duration.not_in' => 'Duration is required',
            'package_details.required' => 'Package details is required',
            'num_days.required' => 'Number of days is required'
        ]);

        $data = [
            'package_name' => $request->package_name,
            'package_slug' => $createSlugService->CreateSlugService($request->package_name),
            'package_price' => $request->package_price,
            'package_price_duration' => $request->package_price_duration,
            'package_details' => $request->package_details,
            'package_summary' => $request->package_summary,
            'num_days' => $request->num_days,
            'status' => Package::STATUS_ACTIVE
        ];

        $package = Package::create($data);

        if($package){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $package = Package::findorFail($id);
        return view('backend.package.show', compact('package'));
    }

    public function update(Request $request, CreateSlugService $createSlugService){
        $request->validate([
            'package_name' => 'required',
            'package_price' => 'required',
            'package_price_duration' => 'required|not_in:0',
            'package_details' => 'required',
            'num_days' => 'required'
        ],[
            'package_name.required' => 'Package Name is required',
            'package_price.required' => 'Package price is required',
            'package_price_duration.required' => 'Duration is required',
            'package_price_duration.not_in' => 'Duration is required',
            'package_details.required' => 'Package details is required',
            'num_days.required' => 'Number of days is required'
        ]);

        $package = Package::findorFail($request->id);

        $data = [
            'package_name' => $request->package_name,
            'package_slug' => $createSlugService->CreateSlugService($request->package_name),
            'package_price' => $request->package_price,
            'package_price_duration' => $request->package_price_duration,
            'package_details' => $request->package_details,
            'package_summary' => $request->package_summary,
            'num_days' => $request->num_days,
            'status' => $request->status
        ];

        $updatePackage = $package->update($data);

        $getServices = $request->services;
        if(!empty($getServices)) {
            $packageServices = $package->packageServices;

            foreach($packageServices as $packageService){
                $package->packageServices()->detach($packageService->id);
            }


            foreach ($getServices as $getService) {
                $package->packageServices()->attach($getService);
            }
        }

        if($updatePackage){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id){
        //
    }
}
