<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/add-supervisor', function () {
    return view('managers.add-supervisor');
});
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
