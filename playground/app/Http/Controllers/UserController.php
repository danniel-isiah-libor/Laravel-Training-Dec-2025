<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
<<<<<<< HEAD
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
<<<<<<< HEAD
    public function showRegister()
    {
        return view('register');
    }
    public function register(RegisterRequest $request)
    {
        $dump = $request->validated();
        dd($dump);
    }
    public function login(LoginRequest $request)
    {
        $dump = $request->validated();
        dd($dump);
    }
    public function logout()
    {
        return "Logout User";
    }
    public function showData()
    {
        $user = User::getData();
        return view('user.data', ['user' => $user]);
    }

    public function showWorkExperience()
    {
        $workExperiences = WorkExperience::getExperiences();

        return view('user.work-experience', [
            'workExperiences' => $workExperiences
        ]);
=======

    public function authenticate(LoginRequest $request)
    {
        $validateForm = $request->validated();

        $user = User::where('email', $validateForm['email'])->first();

        Auth::login($user);

        return redirect()->route('welcome');
    }

    public function showRegister()
    {
        Cache::put('user_id', 1);
        // Session::put('user_id', 1);

        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $validatedForm = $request->validated();

        // saving...
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function showProfile()
    {
        $user = User::getData();

        return view('user.profile', [
            'user' => $user,
        ]);
    }

    public function editProfile(Request $request, $id)
    {
        return 'User Profile Edit Page for ID: ' . $id;
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a
    }
}
