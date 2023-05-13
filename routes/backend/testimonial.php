<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\TestimonialController;

Route::get('testimonials', [TestimonialController::class, 'index']);
Route::get('testimonial/create', [TestimonialController::class, 'create']);
Route::post('testimonial/store', [TestimonialController::class, 'store']);
Route::get('testimonial/{id}', [TestimonialController::class, 'show']);
Route::post('testimonial/update', [TestimonialController::class, 'update']);
Route::get('testimonial/{id}/delete', [TestimonialController::class, 'delete']);
