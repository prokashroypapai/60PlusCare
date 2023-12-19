<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Zone;
use App\Services\CreatePictureService;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ZoneController extends Controller
{
    public function index(){
        $zones = Zone::paginate(10);
        return view('backend.zone.index', compact('zones'));
    }

    public function create(){
        return view('backend.zone.create');
    }

    public function store(Request $request, CreateSlugService $createSlugService){
        $request->validate([
            'zone_name' => 'required|unique:zones'
        ],[
            'zone_name.required' => 'Zone Name is required',
            'zone_name.unique' => 'Zone Name already exists'
        ]);

        $data = [
            'zone_name' => $request->zone_name,
            'zone_slug' => $createSlugService->CreateSlugService($request->zone_name),
            'status' => Zone::STATUS_ACTIVE
        ];

        $createZone = Zone::create($data);

        if($createZone){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $zone = Zone::findorFail($id);
        return view('backend.zone.show', compact('zone'));
    }

    public function update(Request $request, CreateSlugService $createSlugService, CreatePictureService $createPictureService)
    {
        $id = $request->id;

        $request->validate([
            'zone_name' => ['required',
                Rule::unique('zones')->ignore($id),
            ],
        ],[
            'zone_name.required' => 'Zone Name is required',
            'zone_name.unique' => 'Zone name already exists'
        ]);

        $zone = Zone::findorFail($request->id);

        $data = [
            'zone_name' => $request->zone_name,
            'zone_slug' => $createSlugService->CreateSlugService($request->zone_name),
            'status' => $request->status
        ];

        $updateZone = $zone->update($data);

        if($updateZone){
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
