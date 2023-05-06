<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\DashboardController;


Route::group(['middleware' => 'member'], function() {

    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);
});
