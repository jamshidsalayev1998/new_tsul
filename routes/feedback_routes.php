<?php

use App\Http\Controllers\Admin\FeedbackAdminController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => 'admin',
        'middleware' => ['auth', 'superadmin']
    ],
    function () {
        Route::get('feedbacks', [FeedbackAdminController::class, 'index'])->name('admin.feedbacks.index');
        Route::get('feedbacks/{id}', [FeedbackAdminController::class, 'show'])->name('admin.feedbacks.show');
        Route::patch('feedbacks/{id}/status', [FeedbackAdminController::class, 'updateStatus'])->name('admin.feedbacks.updateStatus');
        Route::get('feedbacks-rating-stats', [FeedbackAdminController::class, 'ratingStats'])->name('admin.feedbacks.ratingStats');


    }
);