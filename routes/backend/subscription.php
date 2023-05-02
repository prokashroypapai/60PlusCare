<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SubscriptionController;

Route::get('subscriptions', [SubscriptionController::class, 'index']);
Route::get('subscription/create', [SubscriptionController::class, 'create']);
Route::post('subscription/store', [SubscriptionController::class, 'store']);
Route::get('subscription/{id}', [SubscriptionController::class, 'show']);
Route::post('subscription/update', [SubscriptionController::class, 'update']);
Route::get('subscription/{id}/delete/{user_id?}', [SubscriptionController::class, 'delete']);

Route::get('subscription/user/{user_id}', [SubscriptionController::class, 'subscriptionUser']);
