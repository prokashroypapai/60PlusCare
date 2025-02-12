<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TrainingController;

Route::get('trainings', [TrainingController::class, 'index']);
Route::get('training/create', [TrainingController::class, 'create']);
Route::post('training/store', [TrainingController::class, 'store']);
Route::get('training/{id}', [TrainingController::class, 'show']);
Route::post('training/update', [TrainingController::class, 'update']);
Route::get('training/{id}/delete', [TrainingController::class, 'delete']);

//participant
Route::get('participant/create', [TrainingController::class, 'participantCreate']);
Route::post('participantStore', [TrainingController::class, 'participantStore']);
Route::get('participant/{id}', [TrainingController::class, 'participant']);
Route::post('participantUpdate', [TrainingController::class, 'participantUpdate']);
