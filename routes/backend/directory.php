<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DirectoryController;

Route::get('directories', [DirectoryController::class, 'index']);
Route::get('directory/create', [DirectoryController::class, 'create']);
Route::post('directory/store', [DirectoryController::class, 'store']);
Route::get('directory/{id}', [DirectoryController::class, 'show']);
Route::post('directory/update', [DirectoryController::class, 'update']);
Route::get('directory/{id}/delete', [DirectoryController::class, 'delete']);
