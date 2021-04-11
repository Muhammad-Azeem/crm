<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/supervisor', 'middleware' => ['role:supervisor'], 'as' => 'supervisor.'], function () {

    Route::get('/profile', [App\Http\Controllers\Supervisor\PageController::class, 'profile'])->name('profile');
    Route::put('/profile', [App\Http\Controllers\Supervisor\PageController::class, 'update'])->name('profile.update');


    Route::get('/form/show/{form}/{notification_id}', [FormController::class, 'show'])->name('form.show');

    Route::get('/employee-listing', [App\Http\Controllers\Supervisor\EmployeeController::class, 'index'])->name('employee.index');

    Route::get('/forms', [\App\Http\Controllers\Supervisor\FormController::class, 'index'])->name('forms.index');

    Route::get('/employee/{employee}/forms', [App\Http\Controllers\Supervisor\FormController::class, 'forms'])->name('employee.forms');

    Route::put('employee/form/{form}/status', [\App\Http\Controllers\Supervisor\FormController::class, 'updateStatus'])->name('employee.form.update.status');

    Route::post('/form/comments', [\App\Http\Controllers\Supervisor\CommentController::class, 'store'])->name('form.comments.store');

    Route::get('/form/{form}/comments', [\App\Http\Controllers\Supervisor\CommentController::class, 'index'])->name('form.comments.index');
});
