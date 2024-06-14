<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TasksController;


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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('auth.dashboard');
    Route::get('/tables', [DatatableController::class, 'index'])->name('tables.index');
});

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::get('/dashboard', [AdminController::class, 'admin'])->name('admin.dashboard');
    Route::get('/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::get('/createuser', [AdminController::class, 'createUserView'])->name('admin.createuser.view');
    Route::post('/createuser', [AdminController::class, 'createuser'])->name('admin.createuser'); 
    Route::get('/createadmin', [AdminController::class, 'createAdminView'])->name('admin.createadmin.view');
    Route::post('/createadmin', [AdminController::class, 'createadmin'])->name('admin.createadmin'); 

});

