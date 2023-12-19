<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ZoneController;

Route::get('zones', [ZoneController::class, 'index']);
Route::get('zone/create', [ZoneController::class, 'create']);
Route::post('zone/store', [ZoneController::class, 'store']);
Route::get('zone/{id}', [ZoneController::class, 'show']);
Route::post('zone/update', [ZoneController::class, 'update']);
Route::get('zone/{id}/delete', [ZoneController::class, 'delete']);
