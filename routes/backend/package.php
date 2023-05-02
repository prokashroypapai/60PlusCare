<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PackageController;

Route::get('packages', [PackageController::class, 'index']);
Route::get('package/create', [PackageController::class, 'create']);
Route::post('package/store', [PackageController::class, 'store']);
Route::get('package/{id}', [PackageController::class, 'show']);
Route::post('package/update', [PackageController::class, 'update']);
Route::get('package/{id}/delete', [PackageController::class, 'delete']);
