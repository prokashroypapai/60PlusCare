<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ContactController;

Route::get('contacts', [ContactController::class, 'index']);
Route::get('contact/{id}', [ContactController::class, 'show']);
