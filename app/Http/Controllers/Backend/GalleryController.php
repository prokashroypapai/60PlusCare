<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\GalleryImage;
use App\Services\CreatePictureService;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::paginate(10);
        return view('backend.gallery.index', compact('galleries'));
    }

    public function create(){
        return view('backend.gallery.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService){
        $request->validate([
            'gallery_name' => 'required'
        ],[
            'gallery_name.required' => 'gallery name is required',
        ]);

        $data = [
            'gallery_name' => $request->gallery_name,
            'gallery_slug' => $createSlugService->CreateSlugService($request->gallery_name),
            'status' => true
        ];

        $gallery = Gallery::create($data);

        if($gallery){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $gallery = Gallery::findorFail($id);
        return view('backend.gallery.show', compact('gallery'));
    }

    public function update(Request $request, CreateSlugService $createSlugService){
        $request->validate([
            'gallery_name' => 'required'
        ],[
            'gallery_name.required' => 'gallery name is required',
        ]);

        $gallery = Gallery::findorFail($request->id);

        $data = [
            'gallery_name' => $request->gallery_name,
            'gallery_slug' => $createSlugService->CreateSlugService($request->gallery_name),
            'status' => $request->status
        ];

        $upGallery = $gallery->update($data);

        if($upGallery){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete(){}

    public function uploadPictures(Request $request, CreatePictureService $createPictureService){
        $request->validate([
            'upload' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048'
        ], [
            'upload.required' => 'Please upload image',
            'upload.image' => 'Please upload image file only',
            'upload.mimes' => 'Please select valid image',
            'upload.max' => 'Upload image within 2MB'
        ]);

        $pictureId = $createPictureService->CreateSinglePictureUpload($request);

        $uploadGalleryImage = GalleryImage::create([
            'picture_id' => $pictureId,
            'gallery_id' => $request->id
        ]);

        if($uploadGalleryImage){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
