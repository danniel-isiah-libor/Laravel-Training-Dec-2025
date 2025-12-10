<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[UserController::class,'showLogin'])->name('login');
Route::post('login',[UserController::class,'login'])->name('login.submit');

Route::get('register',[UserController::class,'showRegister'])->name('register');
Route::post('register',[UserController::class,'register'])->name('register.submit');

Route::get('logout',[UserController::class,'logout'])->name('logout');

Route::get('work-experience', [UserController::class, 'showWorkExperience'])->name('work-experience');