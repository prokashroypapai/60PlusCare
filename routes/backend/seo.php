<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SeoController;

Route::post('seo/update', [SeoController::class, 'update']);
