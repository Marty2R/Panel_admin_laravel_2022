<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

// Routes libres d'accées :
Route::get('/', function () {
    return view('index');
});

Route::get('/documentation', function () {
    return view('welcome');
});

// Routes utilisateur avec Authentification :
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('auth')->name('password.request');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

Route::get('/profile/edite', function () {
    return view('editeprofile');
})->middleware(['auth'])->name('profile');

// Routes Admin :
Route::get('/admin/dashboard', [AdminController::class, 'showAdminDashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/admin/user-manage', [UserController::class, 'showUserManage'])->middleware(['auth'])->name('user-manage');
Route::get('/admin/edit-user', [AdminController::class, 'showAdminEditeUser'])->middleware(['auth'])->name('user-edite');

require __DIR__.'/auth.php';
