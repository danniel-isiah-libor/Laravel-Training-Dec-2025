<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Hash;
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a

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
<<<<<<< HEAD
        $password = request()->password;

        $user = User::where('email', $email)->first();

        $hashedPassword = $user->password;

        if (Auth::attempt(['email' => $email, 'password' => $password]) === false) {
            $fail('Invalid Credentials', null);
=======
        $password = request()->password; // Admin123!

        $user = User::where('email', $email)->first();

        $hashedPassword = $user->password; // sldiuwzgnvangoorih

        // option 1
        // if (Hash::check($password, $hashedPassword)) {
        //     $fail('Invalid credentials');
        // }

        // option 2
        if (Auth::attempt(['email' => $email, 'password' => $password]) === false) {
            $fail('Invalid credentials');
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a
        }
    }
}
