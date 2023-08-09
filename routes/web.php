<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\AdminController;


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
    Route::get('/dashboard', [AdminController::class, 'admin'])->name('layouts.admin');
    Route::get('/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::post('addUser', [AdminController::class, 'addUser'])->name('admin.addUser');
    Route::post('addAdministrator', [AdminController::class, 'addAdministrator'])->name('admin.addAdministrator');
});

