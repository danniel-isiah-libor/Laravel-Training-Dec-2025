<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
<<<<<<< HEAD
    public function showLogin() {
        $user = User::getData();
        return view('user.profile', ['user' => $user]);
    }

    public function showLogout() {
        return "Logout Page";
    }

    public function showRegister() {
        return view('user.profile');
=======
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
>>>>>>> ba83d18b5ddbdacbc22c59f5fc27131c86e33702
    }
}
