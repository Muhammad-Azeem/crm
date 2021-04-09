<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\SaleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Supervisor\SupervisorController;
use App\Http\Controllers\SemiAdmin\SemiAdminController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Supervisor\FormController;



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
Route::get('/', [AuthController::class, 'login_form'])->name('login-form');
Route::get('/login', [AuthController::class, 'login_form'])->name('login-form')->middleware('dashboard');
Route::post('/loginPost', [AuthController::class, 'Login'])->name('login-save');

Route::group(['middleware' => 'logged'], function () {

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    //dashboard
    Route::get('/main-view', [DashboardController::class, 'index']);

    //Supervisor Routes
    Route::get('/add-supervisor', [SupervisorController::class, 'superVisorView']);
    Route::post('/save-supervisor', [SupervisorController::class, 'saveSuperVisor']);

    Route::get('user/add/{role}/{type}/{filterRole}', [SemiAdminController::class, 'addSemiAdmin']);
    Route::post('user/add/', [SemiAdminController::class, 'storeSemiAdmin']);
    //    Route::get('/supervisor/home', [SemiAdminController::class, 'addSemiAdmin']);



    //Semi Admin Routes
    Route::get('/semi-admin-listing', [SemiAdminController::class, 'listing']);

    Route::get('semi-admin/form/show/{form}/{notification_id}', [\App\Http\Controllers\SemiAdmin\FormController::class, 'show'])->name('semi-admin.form.show');

    Route::group(['prefix' => '/supervisor', 'as' => 'supervisor.'], function () {
        Route::get('/form/show/{form}/{notification_id}', [FormController::class, 'show'])->name('form.show');
        Route::get('/employee-listing', [App\Http\Controllers\Supervisor\EmployeeController::class, 'index'])->name('employee.index');
        Route::get('/forms', [\App\Http\Controllers\Supervisor\FormController::class, 'index'])->name('forms.index');
        Route::get('/employee/{employee}/forms', [App\Http\Controllers\Supervisor\FormController::class, 'forms'])->name('employee.forms');

        Route::put('employee/form/{form}/status', [\App\Http\Controllers\Supervisor\FormController::class, 'updateStatus'])->name('employee.form.update.status');

        Route::post('/form/comments', [\App\Http\Controllers\Supervisor\CommentController::class, 'store'])->name('form.comments.store');
        Route::get('/form/{form}/comments', [\App\Http\Controllers\Supervisor\CommentController::class, 'index'])->name('form.comments.index');
    });
    //Supervisor Routes
    Route::get('/supervisor-listing', [SupervisorController::class, 'listing']);


    //Employee Routes

    // Route::get('/form/change-status/{status}/{form_id}', [EmployeeController::class, 'changeStatus']);

    Route::get('employee/form/show/{form}/{notification_id}', [\App\Http\Controllers\Employee\FormController::class, 'show'])->name('employee.form.show');
    Route::get('employee/form/show/{form}', [\App\Http\Controllers\Employee\FormController::class, 'view'])->name('employee.form.view');

    Route::put('employee/form/{form}', [\App\Http\Controllers\Employee\FormController::class, 'updateStatus'])->name('employee.form.update.status');

    Route::post('/form/comments', [\App\Http\Controllers\Employee\CommentController::class, 'store'])->name('form.comments.store');
    Route::get('/form/{form}/comments', [\App\Http\Controllers\Employee\CommentController::class, 'index'])->name('form.comments.show');
    Route::get('/comment/{comment}/file/download', [\App\Http\Controllers\Employee\CommentController::class, 'downloadFile'])->name('comment.file.download');


    Route::post('/add-form', [SaleController::class, 'store'])->name('add-form.store');
    Route::get('/employee/forms', [SaleController::class, 'index'])->name('employee.forms.index');

    Route::get('/add-supervisor', function () {
        return view('managers.add-supervisor');
    })->name('test');

    Route::get('/sales', function () {
        return view('managers.index');
    });

    Route::get('/add-form', function () {
        return view('users.add-form');
    })->middleware('permission:add-form');

    Route::get('/sup-dashboard', function () {
        return view('supervisors.dashboard');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';
