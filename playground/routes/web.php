<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->group(function () {
    Route::get('/login', [UserController::class, 'login'])->name('login');

    Route::get('/register', [UserController::class, 'register'])->name('register');

    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
});

Route::prefix('work-experience')->group(function () {
    Route::get('/', [WorkExperienceController::class, 'index']);
});
