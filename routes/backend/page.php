<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\PageController;

Route::get('pages', [PageController::class, 'index']);
Route::get('page/create', [PageController::class, 'create']);
Route::post('page/store', [PageController::class, 'store']);
Route::get('page/{id}', [PageController::class, 'show']);
Route::post('page/update', [PageController::class, 'update']);
Route::get('page/delete/{id}', [PageController::class, 'delete']);
