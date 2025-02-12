<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\FeedController;

Route::get('feeds', [FeedController::class, 'index']);
Route::get('feed/create', [FeedController::class, 'create']);
Route::post('feed/store', [FeedController::class, 'store']);
Route::get('feed/{id}', [FeedController::class, 'show']);
Route::post('feed/update', [FeedController::class, 'update']);
Route::get('feed/{id}/delete', [FeedController::class, 'delete']);
