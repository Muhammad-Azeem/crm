<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Supervisor\SupervisorController;
use App\Http\Controllers\SemiAdmin\SemiAdminController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Dashboard\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Auth Routes
Route::get('/login', [AuthController::class, 'login_form'])->name('login-form')->middleware('dashboard');
Route::post('/loginPost', [AuthController::class, 'Login'])->name('login-save');

Route::group(['middleware' => 'logged'], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //dashboard
    Route::get('/main-view',[DashboardController::class,'index']);

    //Supervisor Routes
    Route::get('/add-supervisor', [SupervisorController::class, 'superVisorView']);
    Route::post('/save-supervisor', [SupervisorController::class, 'saveSuperVisor']);

    //Semi Admin Routes
    Route::get('/semi-admin-listing',[SemiAdminController::class,'listing']);

    //Supervisor Routes
    Route::get('/supervisor-listing',[SupervisorController::class,'listing']);

    //Employee Routes
    Route::get('/employee-listing',[EmployeeController::class,'listing']);

});

Route::get('/add-supervisor', function () {
    return view('managers.add-supervisor');
})->name('test');

Route::get('/sales', function () {
    return view('managers.index');
});

Route::get('/add-form', function () {
    return view('users.add-form');
});

Route::get('/sup-dashboard', function () {
    return view('supervisors.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__ . '/auth.php';
