<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\NoticeboardController;

Route::get('noticeboards', [NoticeboardController::class, 'index']);
Route::get('noticeboard/create', [NoticeboardController::class, 'create']);
Route::post('noticeboard/store', [NoticeboardController::class, 'store']);
Route::get('noticeboard/{id}', [NoticeboardController::class, 'show']);
Route::post('noticeboard/update', [NoticeboardController::class, 'update']);
Route::get('noticeboard/{id}/delete', [NoticeboardController::class, 'delete']);
