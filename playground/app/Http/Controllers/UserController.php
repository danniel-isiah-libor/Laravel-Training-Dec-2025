<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\WorkExperience;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;


class UserController extends Controller
{
    public function showLogin()
    {
        return "Login Page";
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
    public function logout()
    {
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
