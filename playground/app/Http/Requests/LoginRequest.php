<?php

namespace App\Http\Requests;

<<<<<<< HEAD
=======
use App\Rules\LoginRule;
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => [
                'required',
<<<<<<< HEAD
                'email:dns,strict,rfc',
=======
                'string',
                new LoginRule
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a
            ],
            'password' => [
                'required',
                'string',
<<<<<<< HEAD
                'min:8',
                'max:12',
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.max' => 'Password must not exceed 12 characters',
=======
            ]
>>>>>>> 31cff93ebf77aad3d6d0e606e529ca6083113c5a
        ];
    }
}
