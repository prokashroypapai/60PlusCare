<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feed;
use App\Models\Picture;
use App\Services\CreatePictureService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedController extends Controller
{
    public function index(){
        $feeds = Feed::paginate(10);
        return view('backend.feed.index', compact('feeds'));
    }

    public function create(){
        return view('backend.feed.create');
    }

    public function store(Request $request, CreatePictureService $createPictureService)
    {
        $request->validate([
            'url' => 'max:191',
            'summary' => 'max:191'
        ],[
            'url.max' => 'Character limit is 191',
            'summary.max' => 'Type summary under 191 characters'
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
            'user_id' => Auth::user()->id,
            'url' => $request->url,
            'summary' => $request->summary,
            'status' => Feed::STATUS_ACTIVE
        ];

        $createFeed = Feed::create($data);

        if($createFeed){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $feed = Feed::findorFail($id);
        return view('backend.feed.show', compact('feed'));
    }

    public function update(Request $request, CreatePictureService $createPictureService)
    {
        $request->validate([
            'url' => 'max:191',
            'summary' => 'max:191'
        ],[
            'url.max' => 'Character limit is 191',
            'summary.max' => 'Type summary under 191 characters'
        ]);

        $feed = Feed::findorFail($request->id);

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
            $pictureId = $feed->picture_id;
        }

        $data = [
            'picture_id' => $pictureId,
            'url' => $request->url,
            'summary' => $request->summary,
            'status' => $request->status
        ];

        $updateFeed = $feed->update($data);

        if($updateFeed){
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
