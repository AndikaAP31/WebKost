<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomepageController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/percobaan', [AuthController::class, 'coba'])->name('percobaan');

Route::get('/homepage', [HomepageController::class, 'showhomepage'])->name('homepage');