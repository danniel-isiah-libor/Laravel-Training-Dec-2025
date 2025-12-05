<?php

use App\Http\Controllers\UserController;
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('user')->group(function () {
    Route::get('/register', [UserController::class, 'showRegister'])->name('register');
    
    Route::get('/login', [UserController::class, 'showLogin'])->name('login');
    
    Route::get('/logout', [UserController::class, 'showLogout'])->name('logout');
});
=======
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // logic here ....
    return view('welcome');
});

// Route::view('/', 'welcome');

Route::get('/hello', function () {
    // return 'Hello, World!';
    // return 1;
    // return true;
    // return ['honda', 'toyota', 'nissan'];
    // return (object) ['name' => 'Taro', 'age' => 21];
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/profile')->name('profile.')->group(function () {
        Route::get('/user/{id}/edit', [UserController::class, 'editProfile'])->name('user.edit');

        Route::get('/user/{id?}', function ($id = null) {
            return 'User Profile Show Page for ID: ' . $id;
        })->name('user.show');

        Route::get('/customer/1/edit', function () {
            return 'Customer Profile Edit Page';
        })->name('customer.edit');

        Route::get('/company/1/edit', function () {
            return 'Company Profile Edit Page';
        })->name('company.edit');
    });

    Route::get('/dashboard', function () {
        return 'Admin Dashboard Page';
    })->name('dashboard');
});

Route::get('/to', function () {
    return 'You have been redirected to the "to" route.';
})->name('to');

// Route::get('/from', function () {
//     return redirect()->route('to');
// });

Route::redirect('/from', '/to');

// Route::fallback(function () {
//     return 'The page you are looking for does not exist.';
// });


Route::get('form-submit', function (Request $request) {
    // dd($request->date('birthdate')->diffForHumans());

    $userId = 1;

    $request->merge([
        'user_id' => $userId,
    ]);

    dd($request->all());

    return 'Form submitted successfully!';
})->name('form.submit');

Route::get('login', [UserController::class, 'showLogin'])->name('login');
Route::get('register', [UserController::class, 'showRegister'])->name('register');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::get('profile', [UserController::class, 'showProfile'])->name('profile.show');

Route::get('work-experiences', [WorkExperienceController::class, 'show'])->name('work-experience.show');

/**
 *
 * company name: Acme Corp
 * position: Software Engineer
 * tenure: Jan 2020 - Present
 *
 * company name: Beta Solutions
 * position: Junior Developer
 * tenure: Jan 2018 - Dec 2019
 *
 */

/**
 * PascalCase
 * snake_case
 * kebab-case
 * camelCase
 */
>>>>>>> ba83d18b5ddbdacbc22c59f5fc27131c86e33702
