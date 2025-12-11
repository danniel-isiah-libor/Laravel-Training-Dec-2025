<?php

namespace App\Rules;

<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class UniqueEmailRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
<<<<<<< HEAD
        //
=======
        // logic here ....

        $name = request()->name;

        // perform query .....

        $condition = User::isAdmin();

        if ($condition) {
            $fail('The :attribute is already taken.');
        }
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a
    }
}
