<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Picture;
use App\Services\CreatePictureService;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::paginate(10);
        return view('backend.article.index', compact('articles'));
    }

    public function create(){
        return view('backend.article.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'posted_at' => 'required',
            'title' => 'required',
            'description' => 'required'
        ],[
            'posted_at.required' => 'Posted Date is required',
            'title.required' => 'Title is required',
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
            'user_id' => Auth::user()->id,
            'posted_at' => $request->posted_at,
            'author' => $request->author,
            'title' => $request->title,
            'slug' => $createSlugService->CreateSlugService($request->title),
            'description' => $request->description,
            'status' => true
        ];

        $article = Article::create($data);

        if($article){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $article = Article::findorFail($id);
        return view('backend.article.show', compact('article'));
    }

    public function update(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'posted_at' => 'required',
            'title' => 'required',
            'description' => 'required'
        ],[
            'posted_at.required' => 'Posted Date is required',
            'title.required' => 'Title is required',
            'description.required' => 'Description is required'
        ]);

        $article = Article::findorFail($request->id);

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
            $pictureId = $article->picture_id;
        }

        $data = [
            'picture_id' => $pictureId,
            'user_id' => Auth::user()->id,
            'posted_at' => $request->posted_at,
            'author' => $request->author,
            'title' => $request->title,
            'slug' => $createSlugService->CreateSlugService($request->title),
            'description' => $request->description,
            'status' => $request->status
        ];

        $updateArticle = $article->update($data);

        if($updateArticle){
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
