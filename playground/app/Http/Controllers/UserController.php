<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLogin()
    {
        return 'Login Page';
    }

    public function showRegister()
    {
        return 'Register Page';
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
