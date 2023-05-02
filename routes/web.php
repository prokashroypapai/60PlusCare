<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//admin
require __DIR__ . '/backend/backend.php';

//homepage
Route::get('/', [WelcomeController::class, 'index']);

//Services
Route::get('services/{service_slug?}', [ServiceController::class, 'index']);
