<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = Page::orderby('page_title', 'asc')->get();
        return view('backend.page.index', compact('pages'));
    }

    public function create()
    {
        return view('backend.page.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService)
    {
        $request->validate([
            'page_title' => 'required|unique:pages'
        ],[
            'page_title.required' => 'Page Title is required',
            'page_title.unique' => 'Page Title is required'
        ]);

        $data = [
            'page_title' => $request->page_title,
            'page_slug' => $createSlugService->CreateSlugService($request->page_title),
            'description' => $request->description
        ];

        $page = Page::create($data);
        $pageId = $page->id;

        if($pageId) {
            return redirect()->back()->with('success', 'Updated');
        }
        else{
            return redirect()->back()->with('success', 'Something went wrong');
        }
    }

    public function show($id)
    {
        $page = Page::findorfail($id);
        return view('backend.page.show', compact('page'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $page = Page::findorFail($id);

        if($page->is_basic == true){
            return redirect()->back()->with('error', 'Can not modify basic page');
        }

        $request->validate([
            'page_title' => ['required',
                Rule::unique('pages')->ignore($id),
            ],
            'page_slug' => ['required',
                Rule::unique('pages')->ignore($id),
            ]
        ], [
            'page_title.required' => 'Page Title is required',
            'page_slug.required' => 'Page Slug is required'
        ]);

        if($request->is_writable == 1) {
            $description = $request->description;
        }
        else{
            $description = $page->description;
        }

        $updatePage = $page->update([
            'page_title' => $request->page_title,
            'page_slug' => $request->page_slug,
            'description' => $description,
            'status' => $request->status
        ]);

        if($updatePage) {
            return redirect()->back()->with('success', 'Updated');
        }
        else{
            return redirect()->back()->with('error', 'not Updated');
        }
    }

    public function delete($id)
    {
        $page = Page::findorFail($id);
        $page->delete();

        return redirect('pages')->with('success', 'Deleted successfully');
    }
}
