<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ArticleController;

Route::get('articles', [ArticleController::class, 'index']);
Route::get('article/create', [ArticleController::class, 'create']);
Route::post('article/store', [ArticleController::class, 'store']);
Route::get('article/{id}', [ArticleController::class, 'show']);
Route::post('article/update', [ArticleController::class, 'update']);
Route::get('article/{id}/delete', [ArticleController::class, 'delete']);
