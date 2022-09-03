<?php

use Illuminate\Support\Facades\Route;
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

// Routes libres d'accées :
Route::get('/', function () {
    return view('index');
});

Route::get('/documentation', function () {
    return view('welcome');
});

// Routes avec Authentification :
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('auth')->name('password.request');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('profile');

// Routes avec Authentification Admin :
Route::get('/admin/dashboard', function () {
    return view('admin.adminpanel');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/user-manage', function () {
    $users = DB::table('users')->get();
    return view('admin.user_manage', compact('users'));
})->middleware(['auth'])->name('profile');

require __DIR__.'/auth.php';
