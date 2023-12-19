<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AppointmentController;

Route::get('appointments', [AppointmentController::class, 'index']);
Route::get('appointment/{id}', [AppointmentController::class, 'show']);
