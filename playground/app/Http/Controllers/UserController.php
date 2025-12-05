<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLogin() {
        $user = User::getData();
        return view('user.profile', ['user' => $user]);
    }

    public function showLogout() {
        return "Logout Page";
    }

    public function showRegister() {
        return view('user.profile');
    }
}
