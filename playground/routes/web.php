<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->group(function () {
    Route::get('/register', [UserController::class, 'showRegister'])->name('register');
    
    Route::get('/login', [UserController::class, 'showLogin'])->name('login');
    
    Route::get('/logout', [UserController::class, 'showLogout'])->name('logout');
});
