<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\RegisterController;
use App\Http\Controllers\Frontend\ArticleController;
use App\Http\Controllers\Frontend\GalleryController;

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

//auth
require __DIR__ . '/frontend/auth.php';

//sitemap
require __DIR__ . '/frontend/sitemap.php';

//homepage
Route::get('/', [WelcomeController::class, 'index']);

//Services
Route::get('services/{service_slug?}', [ServiceController::class, 'index']);

//dashboard
require __DIR__ . '/frontend/dashboard.php';

//location
Route::get('city/{location_slug?}', [WelcomeController::class, 'location']);

//member register
Route::get('register', [RegisterController::class, 'index']);

//article
Route::get('article/{slug?}', [ArticleController::class, 'index']);

//gallery
Route::get('gallery/{slug?}', [GalleryController::class, 'index']);

//all paths
Route::get('/{path?}', [WelcomeController::class, 'getpages'])->where('path', '.*');
