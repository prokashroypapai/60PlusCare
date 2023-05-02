<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ServiceController;

Route::get('services', [ServiceController::class, 'index']);
Route::get('service/create', [ServiceController::class, 'create']);
Route::post('service/store', [ServiceController::class, 'store']);
Route::get('service/{id}', [ServiceController::class, 'show']);
Route::post('service/update', [ServiceController::class, 'update']);
Route::get('service/{id}/delete', [ServiceController::class, 'delete']);
