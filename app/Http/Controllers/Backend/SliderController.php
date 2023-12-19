<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use App\Models\Slider;
use App\Services\CreatePictureService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::paginate(10);
        return view('backend.slider.index', compact('sliders'));
    }

    public function create(){
        return view('backend.slider.create');
    }

    public function store(Request $request, CreatePictureService $createPictureService){
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ], [
            'upload.required' => 'Please upload image',
            'upload.image' => 'Please upload image file only',
            'upload.mimes' => 'Please select valid image',
            'upload.max' => 'Upload image within 2MB'
        ]);

        if($request->hasFile('upload')) {
            $pictureId = $createPictureService->CreateSinglePictureUpload($request);
        }
        else{
            $pictureId = Picture::getDefaultImage()->id;
        }

        $data = [
            'picture_id' => $pictureId,
            'status' => Slider::STATUS_ACTIVE
        ];

        $createSlider = Slider::create($data);

        if($createSlider){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $slider = Slider::findorFail($id);
        return view('backend.slider.show', compact('slider'));
    }

    public function update(Request $request, CreatePictureService $createPictureService){
        $slider = Slider::findorFail($request->id);

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
            $pictureId = $slider->picture_id;
        }

        $data = [
            'picture_id' => $pictureId,
            'status' => $request->status
        ];

        $updateSlider = $slider->update($data);

        if($updateSlider){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id){
        $slider = Slider::findorFail($id);

        $delSlider = $slider->delete();

        if($delSlider){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
