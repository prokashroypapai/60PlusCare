<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Activity\Participant;
use App\Models\Activity\Training;
use App\Models\Picture;
use App\Services\CreatePictureService;
use App\Services\CreateSlugService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TrainingController extends Controller
{
    //all trainings
    public function index(){
        $trainings = Training::paginate(10);
        return view('backend.training.index', compact('trainings'));
    }

    public function create(){
        return view('backend.training.create');
    }

    public function store(Request $request, CreatePictureService $createPictureService, CreateSlugService $createSlugService)
    {
        $request->validate([
            'training_title' => 'required',
            'date_expiry' => 'required'
        ], [
            'training_title.required' => 'Training Title is required',
            'date_expiry.required' => 'Date expiry is required'
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
            'user_id' => Auth::user()->id,
            'picture_id' => $pictureId,
            'training_title' => $request->training_title,
            'training_slug' => $createSlugService->CreateSlugService($request->training_title),
            'training_details' => $request->training_details,
            'training_rules' => $request->training_rules,
            'training_location' => $request->training_location,
            'training_date' => Carbon::parse($request->training_date)->format('Y-m-d'),
            'date_expiry' => Carbon::parse($request->date_expiry)->format('Y-m-d'),
            'is_expired' => Training::EXPIRED_NO,
            'status' => Training::STATUS_ACTIVE
        ];

        $createTraining = Training::create($data);

        if($createTraining){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function show($id){
        $training = Training::findorFail($id);
        return view('backend.training.show', compact('training'));
    }

    public function update(Request $request, CreatePictureService $createPictureService, CreateSlugService $createSlugService){
        $training = Training::findorFail($request->id);

        $request->validate([
            'training_title' => 'required',
            'date_expiry' => 'required'
        ], [
            'training_title.required' => 'Training Title is required',
            'date_expiry.required' => 'Date expiry is required'
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
            $pictureId = $training->picture_id;
        }

        $data = [
            'user_id' => Auth::user()->id,
            'picture_id' => $pictureId,
            'training_title' => $request->training_title,
            'training_slug' => $request->training_title == $training->training_title ? $training->training_slug : $createSlugService->CreateSlugService($request->training_title),
            'training_details' => $request->training_details,
            'training_rules' => $request->training_rules,
            'training_location' => $request->training_location,
            'training_date' => Carbon::parse($request->training_date)->format('Y-m-d'),
            'date_expiry' => Carbon::parse($request->date_expiry)->format('Y-m-d'),
            'is_expired' => $request->is_expired,
            'status' => $request->status
        ];

        $updateTraining = $training->update($data);

        if($updateTraining){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id){
        $training = Training::findorFail($id);

        $delTraining = $training->delete();

        if($delTraining){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function participant($id)
    {
        $participant = Participant::findorFail($id);

        return view('backend.training.participant', compact('participant'));
    }

    public function participantUpdate(Request $request, CreatePictureService $createPictureService)
    {
        $id = $request->id;

        $request->validate([
            'certificate_no' => 'required_if:is_eligible,"=","1"'
        ],[
            'certificate_no.required_if' => 'Certificate no is required',
            'certificate_no.unique' => 'Certificate no already exists'
        ]);

        $participant = Participant::findorFail($id);

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
            $pictureId = $participant->picture_id;
        }

        $updateParticipant = $participant->update([
            'picture_id' => $pictureId,
            'certificate_no' => $request->certificate_no,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'dob' => Carbon::parse($request->dob)->format('Y-m-d'),
            'is_eligible' => $request->is_eligible
        ]);

        if($updateParticipant){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function participantCreate(Request $request)
    {
        $trainingId = $request->trainingId;

        if($trainingId == null){
            abort(404);
        }

        return view('backend.training.participantCreate');
    }

    public function participantStore(Request $request, CreatePictureService $createPictureService)
    {
        $request->validate([
            'certificate_no' => 'required_if:is_eligible,"=","1"|unique:participants',
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
        ],[
            'certificate_no.required_if' => 'Certificate no is required',
            'certificate_no.unique' => 'Certificate no already exists',
            'name.required' => 'Name is required',
            'mobile.required' => 'Mobile is required',
            'email.required' => 'Email is required',
            'email.email' => 'Valid Email is required'
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
            'training_id' => $request->training_id,
            'picture_id' => $pictureId,
            'certificate_no' => $request->certificate_no,
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
            'dob' => Carbon::parse($request->dob)->format('Y-m-d'),
            'age' => null,
            'is_eligible' => $request->is_eligible,
            'status' => Participant::STATUS_ACTIVE
        ];

        $createParticipant = Participant::create($data);

        if($createParticipant){
            return redirect()->back()->with('success', 'Saved successfully');
        }
        else{
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
