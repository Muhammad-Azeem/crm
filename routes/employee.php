<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/employee', 'middleware' => ['role:customer'], 'as' => 'employee.'], function () {


    Route::get('/profile', [\App\Http\Controllers\Employee\PageController::class, 'profile'])->name('profile');
    Route::put('/profile', [\App\Http\Controllers\Employee\PageController::class, 'update'])->name('profile.update');

    Route::get('/forms/create', [\App\Http\Controllers\Employee\FormController::class, 'create'])->name('forms.create');
    Route::post('/forms', [\App\Http\Controllers\Employee\FormController::class, 'store'])->name('forms.store');
    Route::get('/forms', [\App\Http\Controllers\Employee\FormController::class, 'index'])->name('forms.index');

    Route::get('/form/show/{form}/{notification_id}', [\App\Http\Controllers\Employee\FormController::class, 'show'])->name('form.show');
    Route::get('/form/show/{form}', [\App\Http\Controllers\Employee\FormController::class, 'view'])->name('form.view');


    Route::post('/form/comments', [\App\Http\Controllers\Employee\CommentController::class, 'store'])->name('form.comments.store');
    Route::get('/form/{form}/comments', [\App\Http\Controllers\Employee\CommentController::class, 'index'])->name('form.comments.show');
    Route::get('/comment/{comment}/file/download', [\App\Http\Controllers\Employee\CommentController::class, 'downloadFile'])->name('comment.file.download');
});
