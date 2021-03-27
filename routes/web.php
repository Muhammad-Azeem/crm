<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Supervisor\SupervisorController;
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
Route::get('/login',[AuthController::class,'login_form'])->name('login-form');
Route::post('/loginPost',[AuthController::class,'Login'])->name('login-save');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

//Route::group(['middleware' => 'CheckLoggedIn'], function () {
    Route::get('/add-supervisor',[SupervisorController::class,'superVisorView']);
  Route::post('/save-supervisor',[SupervisorController::class,'saveSuperVisor']);
// });


Route::get('/', function () {
    return view('welcome');
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

require __DIR__.'/auth.php';
