<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\RegisteredUserController;

Route::get('registeredUsers', [RegisteredUserController::class, 'index']);
Route::get('registeredUser/create', [RegisteredUserController::class, 'create']);
Route::post('registeredUser/store', [RegisteredUserController::class, 'store']);
Route::get('registeredUser/{id}', [RegisteredUserController::class, 'show']);
Route::post('registeredUser/update', [RegisteredUserController::class, 'update']);
Route::get('registeredUser/{id}/delete', [RegisteredUserController::class, 'delete'])->middleware('admin');
