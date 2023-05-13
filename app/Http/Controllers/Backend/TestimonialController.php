<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Picture;
use App\Models\Testimonial;
use App\Services\CreatePictureService;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index(){
        $testimonials = Testimonial::paginate(10);
        return view('backend.testimonial.index', compact('testimonials'));
    }

    public function create(){
        return view('backend.testimonial.create');
    }

    public function store(Request $request, CreatePictureService $createPictureService){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required',
            'rating' => 'required|not_in:0'
        ],[
            'name.required' => 'Name is required',
            'designation.required' => 'Designation is required',
            'comment.required' => 'Comment is required',
            'rating.required' => 'Rating is required',
            'rating.not_in' => 'Rating is required'
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
            'user_id' => null,
            'picture_id' => $pictureId,
            'name' => $request->name,
            'designation' => $request->designation,
            'comment' => $request->comment,
            'rating' => $request->rating,
            'status' => true
        ];

        $testimonial = Testimonial::create($data);

        if($testimonial){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $testimonial = Testimonial::findorFail($id);
        return view('backend.testimonial.show', compact('testimonial'));
    }

    public function update(Request $request, CreatePictureService $createPictureService){
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required',
            'rating' => 'required|not_in:0'
        ],[
            'name.required' => 'Name is required',
            'designation.required' => 'Designation is required',
            'comment.required' => 'Comment is required',
            'rating.required' => 'Rating is required',
            'rating.not_in' => 'Rating is required'
        ]);

        $testimonial = Testimonial::findorFail($request->id);

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
            $pictureId = $testimonial->picture_id;
        }

        $data = [
            'user_id' => null,
            'picture_id' => $pictureId,
            'name' => $request->name,
            'designation' => $request->designation,
            'comment' => $request->comment,
            'rating' => $request->rating,
            'status' => $request->status
        ];

        $updateTestmonial = $testimonial->update($data);

        if($updateTestmonial){
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
