<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MemberController;
use App\Http\Controllers\API\WelcomeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//member registration
Route::post('registerMember', [MemberController::class, 'store']);

//contact
Route::post('contact', [WelcomeController::class, 'contact']);

//appointment
Route::post('makeAppointment', [WelcomeController::class, 'makeAppointment']);

//user details
Route::post('userDetails', [WelcomeController::class, 'userDetails']);

//member details
Route::post('memberDetails', [WelcomeController::class, 'memberDetails']);

//member details
Route::post('createMember', [MemberController::class, 'createMember']);

//create Participant
Route::post('createParticipant', [WelcomeController::class, 'createParticipant']);

//get Participants with mobile & dob
Route::post('getParticipants', [WelcomeController::class, 'getParticipants']);

//check Certificate No
Route::post('checkCertificateNo', [WelcomeController::class, 'checkCertificateNo']);
