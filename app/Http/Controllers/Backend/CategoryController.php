<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Picture;
use App\Services\CreatePictureService;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::paginate(10);
        return view('backend.category.index', compact('categories'));
    }

    public function create(){
        return view('backend.category.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService){
        $request->validate([
            'category_name' => 'required|unique:categories'
        ],[
            'category_name.required' => 'Category Name is required',
            'category_name.unique' => 'Category Name already exists'
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
            'category_name' => $request->category_name,
            'category_slug' => $createSlugService->CreateSlugService($request->category_name),
            'status' => Category::STATUS_ACTIVE
        ];

        $createCategory = Category::create($data);

        if($createCategory){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $category = Category::findorFail($id);
        return view('backend.category.show', compact('category'));
    }

    public function update(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService)
    {
        $id = $request->id;

        $request->validate([
            'category_name' => ['required',
                Rule::unique('categories')->ignore($id),
            ],
        ],[
            'category_name.required' => 'Category Name is required',
            'category_name.unique' => 'Category name already exists'
        ]);

        $category = Category::findorFail($request->id);

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
            $pictureId = $category->picture_id;
        }

        $data = [
            'picture_id' => $pictureId,
            'category_name' => $request->category_name,
            'category_slug' => $createSlugService->CreateSlugService($request->category_name),
            'status' => $request->status
        ];

        $updateCategory = $category->update($data);

        if($updateCategory){
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
