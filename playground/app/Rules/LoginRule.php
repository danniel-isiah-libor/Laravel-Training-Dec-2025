<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;

class LoginRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $email = $value;
        $password = request()->password;

        $user = User::where('email',$email)->first();

        $hashedPassword = $user->password;

        if (Auth::attempt(['email'=>$email,'password'=>$password]) === false)
        {  
            $fail('Invalid Credentials',null);
        }
    }
}
