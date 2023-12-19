<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Directory;
use Illuminate\Http\Request;

class DirectoryController extends Controller
{
    public function index(){
        $directories = Directory::paginate(10);
        return view('backend.directory.index', compact('directories'));
    }

    public function create(){
        return view('backend.directory.create');
    }

    public function store(Request $request){
        $request->validate([
            'category_id' => 'required|not_in:0',
            'zone_id' => 'required|not_in:0',
            'directory_name' => 'required',
            'directory_value' => 'required'
        ],[
            'category_id.required' => 'Category is required',
            'category_id.not_in' => 'Category is required',
            'zone_id.required' => 'Zone is required',
            'zone_id.not_in' => 'Zone is required',
            'directory_name.required' => 'Directory name is required',
            'directory_value.required' => 'Directory value is required'
        ]);

        $data = [
            'category_id' => $request->category_id,
            'zone_id' => $request->zone_id,
            'directory_name' => $request->directory_name,
            'directory_value' => $request->directory_value,
            'status' => Directory::STATUS_ACTIVE
        ];

        $createDirectory = Directory::create($data);

        if($createDirectory){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $directory = Directory::findorFail($id);
        return view('backend.directory.show', compact('directory'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'category_id' => 'required|not_in:0',
            'zone_id' => 'required|not_in:0',
            'directory_name' => 'required',
            'directory_value' => 'required'
        ],[
            'category_id.required' => 'Category is required',
            'category_id.not_in' => 'Category is required',
            'zone_id.required' => 'Zone is required',
            'zone_id.not_in' => 'Zone is required',
            'directory_name.required' => 'Directory name is required',
            'directory_value.required' => 'Directory value is required'
        ]);

        $directory = Directory::findorFail($request->id);

        $data = [
            'category_id' => $request->category_id,
            'zone_id' => $request->zone_id,
            'directory_name' => $request->directory_name,
            'directory_value' => $request->directory_value,
            'status' => $request->status
        ];

        $updateDirectory = $directory->update($data);

        if($updateDirectory){
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
