<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthController;

Route::group(['prefix' => 'admin'], function() {
    /*login*/
    Route::get('login', [AuthController::class, 'login']);
    Route::post('login', [AuthController::class, 'postlogin']);

    /*register*/
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'postregister']);

    /*logout*/
    Route::get('logout', [AuthController::class, 'logout']);
});
