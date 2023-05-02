<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use App\Models\Service;
use App\Services\CreatePictureService;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::paginate(10);
        return view('backend.service.index', compact('services'));
    }

    public function create(){
        return view('backend.service.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'service_name' => 'required',
            'description' => 'required'
        ],[
            'service_name.required' => 'Service name is required',
            'description.required' => 'Description is required'
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
            'service_name' => $request->service_name,
            'service_slug' => $createSlugService->CreateSlugService($request->service_name),
            'description' => $request->description,
            'status' => true
        ];

        $service = Service::create($data);

        if($service){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $service = Service::findorFail($id);
        return view('backend.service.show', compact('service'));
    }

    public function update(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'service_name' => 'required',
            'description' => 'required'
        ],[
            'service_name.required' => 'Service name is required',
            'description.required' => 'Description is required'
        ]);

        $service = Service::findorFail($request->id);

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
            $pictureId = $service->picture_id;
        }

        $data = [
            'picture_id' => $pictureId,
            'service_name' => $request->service_name,
            'service_slug' => $createSlugService->CreateSlugService($request->service_name),
            'description' => $request->description,
            'status' => $request->status
        ];

        $upService = $service->update($data);

        if($upService){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete(){}
}
