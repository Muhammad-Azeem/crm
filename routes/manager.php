<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/semi-admin', 'middleware' => ['role:manager'], 'as' => 'manager.'], function () {

    Route::get('/dashboard', [\App\Http\Controllers\SemiAdmin\PageController::class, 'dashboard'])->name('dashboard');

    Route::get('/form/show/{form}/{notification_id}', [\App\Http\Controllers\SemiAdmin\FormController::class, 'show'])->name('form.show');
    Route::get('/supervisors/Employees/{employee}/forms', [\App\Http\Controllers\SemiAdmin\FormController::class, 'index'])->name('supervisors.employees.forms.index');

    Route::get('/supervisors/Employees/forms/{form}', [\App\Http\Controllers\SemiAdmin\FormController::class, 'view'])->name('supervisors.employees.forms.view');

    Route::get('/forms', [\App\Http\Controllers\SemiAdmin\PageController::class, 'forms'])->name('forms');

    Route::get('/forms/{form}', [\App\Http\Controllers\SemiAdmin\PageController::class, 'showForm'])->name('forms.show');

    Route::get('/profile', [\App\Http\Controllers\SemiAdmin\PageController::class, 'profile'])->name('profile');
    Route::put('/profile', [\App\Http\Controllers\SemiAdmin\PageController::class, 'update'])->name('profile.update');



    // Route::get('/supervisors/create', [\App\Http\Controllers\SemiAdmin\SupervisorController::class, 'create'])->name('supervisors.create');
    // Route::post('/supervisors', [\App\Http\Controllers\SemiAdmin\SupervisorController::class, 'store'])->name('supervisors.store');
    Route::get('/supervisors', [\App\Http\Controllers\SemiAdmin\SupervisorController::class, 'index'])->name('supervisors.index');


    Route::get('/supervisors/{supervisor}/employees', [\App\Http\Controllers\SemiAdmin\EmployeeController::class, 'index'])->name('supervisors.employees.index');
});
