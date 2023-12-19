<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ClinicController;

Route::get('clinics', [ClinicController::class, 'index']);
Route::get('clinic/create', [ClinicController::class, 'create']);
Route::post('clinic/store', [ClinicController::class, 'store']);
Route::get('clinic/{id}', [ClinicController::class, 'show']);
Route::post('clinic/update', [ClinicController::class, 'update']);
Route::get('clinic/{id}/delete', [ClinicController::class, 'delete']);
