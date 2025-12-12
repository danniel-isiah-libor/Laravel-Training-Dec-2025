<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

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
    }
}
