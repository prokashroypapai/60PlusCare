<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MembershipController;

Route::get('memberships', [MembershipController::class, 'index']);
Route::get('memberships/{id}/{action}', [MembershipController::class, 'action']);
