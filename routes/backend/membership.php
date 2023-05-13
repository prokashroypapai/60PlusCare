<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MembershipController;

Route::get('memberships', [MembershipController::class, 'index']);
Route::get('membership/{id}', [MembershipController::class, 'show']);
Route::get('membership/{id}/{action}', [MembershipController::class, 'action']);
