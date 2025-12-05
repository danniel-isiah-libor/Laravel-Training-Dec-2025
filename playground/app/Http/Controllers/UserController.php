<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class UserController extends Controller
{
    public function showLogin()
    {
        return view();
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(RegisterRequest $request)
    {
        $validatedForm = $request->validated();

        dd($validatedForm);
    }

    public function logout()
    {
        return 'Logout user';
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
