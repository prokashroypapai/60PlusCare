<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DoctorController;

Route::get('doctors', [DoctorController::class, 'index']);
Route::get('doctor/create', [DoctorController::class, 'create']);
Route::post('doctor/store', [DoctorController::class, 'store']);
Route::get('doctor/{id}', [DoctorController::class, 'show']);
Route::post('doctor/update', [DoctorController::class, 'update']);
Route::get('doctor/{id}/delete', [DoctorController::class, 'delete']);
