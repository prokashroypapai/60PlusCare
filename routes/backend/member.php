<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\MemberController;

Route::get('members', [MemberController::class, 'index']);
Route::get('member/create', [MemberController::class, 'create']);
Route::post('member/store', [MemberController::class, 'store']);
Route::get('member/{id}', [MemberController::class, 'show']);
Route::post('member/update', [MemberController::class, 'update']);
Route::get('member/{id}/delete', [MemberController::class, 'delete']);


Route::post('memberProfile/update', [MemberController::class, 'memberProfileUpdate']);
