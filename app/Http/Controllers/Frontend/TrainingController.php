<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Activity\Participant;
use App\Models\Activity\Training;
use App\Models\Picture;
use App\Services\CreateSlugService;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf;

class TrainingController extends Controller
{
    //all trainings
    public function index()
    {
        $trainings = Training::active()
            ->get();

        $metaseo = [
            'picture_id' => isset($trainings[0]->picture_id) ? $trainings[0]->picture_id : Picture::getDefaultImage()->id,
            'meta_title' => 'All Trainings | ' . env('APP_NAME'),
            'meta_description' => 'All Trainings | ' . env('APP_NAME'),
            'meta_keywords' => '60plus care, training',
            'og_title' => 'All Trainings | ' . env('APP_NAME'),
            'og_description' => 'All Trainings | ' . env('APP_NAME')
        ];

        return view('frontend.training.index', compact('trainings', 'metaseo'));
    }

    //training details
    public function show($slug)
    {
        $training = Training::where('training_slug', $slug)
            ->first();

        if(!$training || $training->status == Training::STATUS_INACTIVE){
            abort(404);
        }

        $metaseo = [
            'picture_id' => isset($trainings[0]->picture_id) ? $trainings[0]->picture_id : Picture::getDefaultImage()->id,
            'meta_title' => 'All Trainings | ' . env('APP_NAME'),
            'meta_description' => 'All Trainings | ' . env('APP_NAME'),
            'meta_keywords' => '60plus care, training',
            'og_title' => 'All Trainings | ' . env('APP_NAME'),
            'og_description' => 'All Trainings | ' . env('APP_NAME')
        ];

        return view('frontend.training.show', compact('training', 'metaseo'));
    }

    //check Certificate
    public function checkCertificate()
    {
        $metaseo = [
            'picture_id' => Picture::getDefaultImage()->id,
            'meta_title' => 'All Trainings | ' . env('APP_NAME'),
            'meta_description' => 'All Trainings | ' . env('APP_NAME'),
            'meta_keywords' => '60plus care, training',
            'og_title' => 'All Trainings | ' . env('APP_NAME'),
            'og_description' => 'All Trainings | ' . env('APP_NAME')
        ];

        return view('frontend.training.checkCertificate', compact('metaseo'));
    }

    public function downloadCertificate($id, CreateSlugService $createSlugService)
    {
        $participant = Participant::findorFail($id);
        $logoImage = base64_encode(file_get_contents(public_path('/static/certificate_files/image001.png')));


        return view('frontend.training.download', compact('participant', 'logoImage'));
        /*$pdf = Pdf::loadView('frontend.training.download', compact('participant', 'logoImage'))
            ->setPaper('a4', 'landscape');

        $filename = 'training' . '-' . $createSlugService->CreateSlugService($participant->name) . '-' . date('his') . '.pdf';
        return $pdf->download($filename);*/
    }
}
