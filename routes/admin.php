<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/admin', 'middleware' => ['role:admin'], 'as' => 'admin.'], function () {

    Route::get('/dashboard', [\App\Http\Controllers\Admin\PageController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [\App\Http\Controllers\Admin\PageController::class, 'profile'])->name('profile');

    Route::put('/profile', [\App\Http\Controllers\Admin\PageController::class, 'update'])->name('profile.update');

    Route::resource('/supervisors', \App\Http\Controllers\Admin\SupervisorController::class)->except('destroy');

    Route::resource('/employees', \App\Http\Controllers\Admin\EmployeeController::class)->except('destroy');

    Route::resource('/semi-admins', \App\Http\Controllers\Admin\SemiAdminController::class)->except('destroy');

    Route::resource('/forms', \App\Http\Controllers\Admin\FormController::class)->only(['index', 'show']);
});
