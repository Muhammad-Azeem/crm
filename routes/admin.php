<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/admin', 'middleware' => ['role:admin'], 'as' => 'admin.'], function () {

    Route::get('/dashboard', [\App\Http\Controllers\Admin\PageController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [\App\Http\Controllers\Admin\PageController::class, 'profile'])->name('profile');

    Route::put('/profile', [\App\Http\Controllers\Admin\PageController::class, 'update'])->name('profile.update');
});
