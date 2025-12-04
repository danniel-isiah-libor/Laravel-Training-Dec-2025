<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        $user = User::getData();
        return [
            'user' => $user
        ];
    }

    public function logout()
    {
        return 'Logout Page';
    }

    public function register()
    {
        return 'Register Page';
    }

    public function profile()
    {
        return view('user.profile', [
            'user' => User::getData()
        ]);
    }
}
