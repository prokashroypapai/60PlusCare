<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\LocationController;

Route::get('locations', [LocationController::class, 'index']);
Route::get('location/create', [LocationController::class, 'create']);
Route::post('location/store', [LocationController::class, 'store']);
Route::get('location/{id}', [LocationController::class, 'show']);
Route::post('location/update', [LocationController::class, 'update']);
Route::get('location/{id}/delete', [LocationController::class, 'delete']);
