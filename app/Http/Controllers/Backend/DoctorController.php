<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Picture;
use App\Models\User;
use App\Services\CreatePictureService;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index(){
        $doctors = Doctor::paginate(10);
        return view('backend.doctor.index', compact('doctors'));
    }

    public function create(){
        return view('backend.doctor.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'doctor_name' => 'required'
            /*'doctor_designation' => 'required',
            'doctor_experience' => 'required'*/
        ],[
            'doctor_name.required' => 'Doctor Name is required'
            /*'doctor_designation.required' => 'Doctor Designation is required',
            'doctor_experience.required' => 'Doctor Experience is required'*/
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
            'doctor_name' => $request->doctor_name,
            'doctor_slug' => $createSlugService->CreateSlugService($request->doctor_name),
            'doctor_designation' => $request->doctor_designation,
            'doctor_association' => $request->doctor_association,
            'doctor_experience' => $request->doctor_experience,
            'is_home' => $request->is_home,
            'status' => 1
        ];

        $doctor = Doctor::create($data);

        if($doctor){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $doctor = Doctor::findorFail($id);
        return view('backend.doctor.show', compact('doctor'));
    }

    public function update(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'doctor_name' => 'required'
            /*'doctor_designation' => 'required',
            'doctor_experience' => 'required'*/
        ],[
            'doctor_name.required' => 'Doctor Name is required'
            /*'doctor_designation.required' => 'Doctor Designation is required',
            'doctor_experience.required' => 'Doctor Experience is required'*/
        ]);

        $doctor = Doctor::findorFail($request->id);

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
            $pictureId = $doctor->picture_id;
        }

        $data = [
            'picture_id' => $pictureId,
            'doctor_name' => $request->doctor_name,
            'doctor_slug' => $createSlugService->CreateSlugService($request->doctor_name),
            'doctor_designation' => $request->doctor_designation,
            'doctor_association' => $request->doctor_association,
            'doctor_experience' => $request->doctor_experience,
            'is_home' => $request->is_home,
            'status' => $request->status
        ];

        $updateDoctor = $doctor->update($data);

        if($updateDoctor){
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
