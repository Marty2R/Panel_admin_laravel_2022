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
// POST formulaire modification des données de l'utilisateur :
Route::post('/profile', [UserController::class, 'edit']);

Route::get('/password-edite', function () {
    return view('passwordedite');
})->middleware(['auth'])->name('password-edite');
// POST formulaire change password :
Route::post('/change-password', [UserController::class, 'editPassword']);

// Routes Admin :
Route::get('/admin/dashboard', [AdminController::class, 'showAdminDashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/admin/user-manage', [UserController::class, 'showUserManage'])->middleware(['auth'])->name('user-manage');
// POST formulaire user delete :
Route::post('/delet-user', [AdminController::class, 'deletUser']);

Route::get('/admin/edit-user', [AdminController::class, 'showAdminEditeUser'])->middleware(['auth'])->name('user-edite');
// envoie l'id de l'utilisateur à modifier dans le controller qui affiche le formulaire d'édition :
Route::post('/edite-user', [AdminController::class, 'editeUser']);

Route::get('/user_edite_form', [AdminController::class, 'editeUser']);
Route::post('/edite-user-form', [AdminController::class, 'editUserRequet']);

require __DIR__.'/auth.php';
