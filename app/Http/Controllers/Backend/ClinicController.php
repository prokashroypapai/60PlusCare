<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Clinic;
use App\Models\Picture;
use App\Services\CreatePictureService;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index(){
        $clinics = Clinic::paginate(10);
        return view('backend.clinic.index', compact('clinics'));
    }

    public function create(){
        return view('backend.clinic.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'clinic_name' => 'required',
            'clinic_address' => 'required',
            'clinic_description' => 'required'
        ],[
            'clinic_name.required' => 'Clinic name is required',
            'clinic_address.required' => 'Clinic address is required',
            'clinic_description.required' => 'Clinic description is required'
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
            'clinic_name' => $request->clinic_name,
            'clinic_slug' => $createSlugService->CreateSlugService($request->clinic_name),
            'clinic_address' => $request->clinic_address,
            'clinic_description' => $request->clinic_description,
            'clinic_map' => $request->clinic_map,
            'status' => true
        ];

        $clinic = Clinic::create($data);

        if($clinic){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $clinic = Clinic::findorFail($id);
        return view('backend.clinic.show', compact('clinic'));
    }

    public function update(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService)
    {
        $request->validate([
            'clinic_name' => 'required',
            'clinic_address' => 'required',
            'clinic_description' => 'required'
        ],[
            'clinic_name.required' => 'Clinic name is required',
            'clinic_address.required' => 'Clinic address is required',
            'clinic_description.required' => 'Clinic description is required'
        ]);

        $clinic = Clinic::findorFail($request->id);

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
            $pictureId = $clinic->picture_id;
        }

        $data = [
            'picture_id' => $pictureId,
            'clinic_name' => $request->clinic_name,
            'clinic_slug' => $createSlugService->CreateSlugService($request->clinic_name),
            'clinic_address' => $request->clinic_address,
            'clinic_description' => $request->clinic_description,
            'clinic_map' => $request->clinic_map,
            'status' => $request->status
        ];

        $upLocation = $clinic->update($data);

        if($upLocation){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete(){}
}
