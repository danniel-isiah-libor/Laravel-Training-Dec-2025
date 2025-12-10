<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;


class UserController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
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
        Auth::logout();
        return "Logout User";
    }
    public function showData()
    {
        $user = User::getData();
        return view('user.data',['user'=>$user]);
    }

    public function showWorkExperience()
    {
        $workExperiences = WorkExperience::getExperiences();

        return view('user.work-experience', [
            'workExperiences' => $workExperiences
        ]);
    }
}
