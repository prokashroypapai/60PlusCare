<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Picture;
use App\Services\CreatePictureService;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index(){
        $locations = Location::paginate(10);
        return view('backend.location.index', compact('locations'));
    }

    public function create(){
        return view('backend.location.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'location_name' => 'required',
            'location_address' => 'required',
            'location_description' => 'required'
        ],[
            'location_name.required' => 'Location name is required',
            'location_address.required' => 'Location address is required',
            'location_description.required' => 'Location description is required'
        ]);

        if($request->hasFile('upload')) {
            $request->validate([
                'upload' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
            ], [
                'upload.image' => 'Please upload image file only',
                'upload.mimes' => 'Please select valid image',
                'upload.max' => 'Upload image within 2MB'
            ]);

            $pictureId = $createPictureService->CreateSinglePictureUpload($request);
        }
        else{
            $pictureId = Picture::getDefaultImage()->id;
        }

        $data = [
            'picture_id' => $pictureId,
            'location_name' => $request->location_name,
            'location_slug' => $createSlugService->CreateSlugService($request->location_name),
            'location_address' => $request->location_address,
            'location_description' => $request->location_description,
            'location_map' => $request->location_map,
            'status' => true
        ];

        $location = Location::create($data);

        if($location){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $location = Location::findorFail($id);
        return view('backend.location.show', compact('location'));
    }

    public function update(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'location_name' => 'required',
            'location_address' => 'required',
            'location_description' => 'required'
        ],[
            'location_name.required' => 'Location name is required',
            'location_address.required' => 'Location address is required',
            'location_description.required' => 'Location description is required'
        ]);

        $location = Location::findorFail($request->id);

        if($request->hasFile('upload')) {
            $request->validate([
                'upload' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
            ], [
                'upload.image' => 'Please upload image file only',
                'upload.mimes' => 'Please select valid image',
                'upload.max' => 'Upload image within 2MB'
            ]);

            $pictureId = $createPictureService->CreateSinglePictureUpload($request);
        }
        else{
            $pictureId = $location->picture_id;
        }

        $data = [
            'picture_id' => $pictureId,
            'location_name' => $request->location_name,
            'location_slug' => $createSlugService->CreateSlugService($request->location_name),
            'location_address' => $request->location_address,
            'location_description' => $request->location_description,
            'location_map' => $request->location_map,
            'status' => $request->status
        ];

        $upLocation = $location->update($data);

        if($upLocation){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete(){}
}
