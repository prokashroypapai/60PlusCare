<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Noticeboard;
use Illuminate\Http\Request;

class NoticeboardController extends Controller
{
    public function index(){
        $noticeboards = Noticeboard::paginate(10);
        return view('backend.noticeboard.index', compact('noticeboards'));
    }

    public function create(){
        return view('backend.noticeboard.create');
    }

    public function store(Request $request){
        $request->validate([
            'notice_title' => 'required',
            'upload' => 'required|mimes:doc,docx,pdf|max:5000'
        ],[
            'notice_title.required' => 'Service title is required',
            'upload.required' => 'File is required',
            'upload.mimes' => 'Please select valid file',
            'upload.max' => 'Upload image within 4MB'
        ]);

        $fileName = time(). '.' .$request->upload->extension();

        $request->upload->move('uploads', $fileName);

        $filepath = 'uploads/' . $fileName;

        $data = [
            'notice_title' => $request->notice_title,
            'notice_file' => $filepath,
            'status' => true
        ];

        $noticeBoard = Noticeboard::create($data);

        if($noticeBoard){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $noticeboard = Noticeboard::findorFail($id);
        return view('backend.noticeboard.show', compact('noticeboard'));
    }

    public function update(Request $request){
        $request->validate([
            'notice_title' => 'required'
        ],[
            'notice_title.required' => 'Service title is required'
        ]);

        $noticeboard = Noticeboard::findorFail($request->id);

        if($request->hasFile('upload')) {
            $request->validate([
                'upload' => 'required|mimes:doc,docx,pdf|max:5000'
            ], [
                'upload.required' => 'File is required',
                'upload.mimes' => 'Please select valid file',
                'upload.max' => 'Upload image within 4MB'
            ]);

            $fileName = time(). '.' .$request->upload->extension();

            $request->upload->move('uploads', $fileName);

            $filepath = 'uploads/' . $fileName;
        }
        else{
            $filepath = $noticeboard->notice_file;
        }

        $data = [
            'notice_title' => $request->notice_title,
            'notice_file' => $filepath,
            'status' => $request->status
        ];

        $upNotice = $noticeboard->update($data);

        if($upNotice){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id){
        $noticeBoard = Noticeboard::findorFail($id);

        $delNotice = $noticeBoard->delete();

        if($delNotice){
            return redirect('admin/noticeboards')->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
