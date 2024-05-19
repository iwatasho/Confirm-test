<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http_Controllers\RegisterController;
use App\Http\Controllers\AdminController;

Route::get('/', [TestController::class, 'index']);
Route::get('/login',function (){
    return view('auth.login');
})->name('login');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/search', [AdminController::class, 'search'])->name('admin.search');
