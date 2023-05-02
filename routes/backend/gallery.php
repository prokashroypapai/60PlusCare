<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\GalleryController;

Route::get('galleries', [GalleryController::class, 'index']);
Route::get('gallery/create', [GalleryController::class, 'create']);
Route::post('gallery/store', [GalleryController::class, 'store']);
Route::get('gallery/{id}', [GalleryController::class, 'show']);
Route::post('gallery/update', [GalleryController::class, 'update']);
Route::get('gallery/{id}/delete', [GalleryController::class, 'delete']);

Route::post('gallery/upload', [GalleryController::class, 'uploadPictures']);
