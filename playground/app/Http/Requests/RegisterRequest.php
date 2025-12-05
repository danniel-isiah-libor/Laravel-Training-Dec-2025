<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password as FacadesPassword;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'name' => [
                    'required',
                    'string',
                    'max:255',
                ],
                'email' => [
                    'required',
                    'email:dns,strict,rfc',
                    'unique:users,email',
                ],
                'password'=> [
                    'required',
                    'string',
                    Password::min(0)
                    ->max(12)
                    ->mixedCase()
                    ->symbols()
                    ->numbers()
                    ->letters()
                    ->uncompromised(),
                    // Password::default(),
                ]
        ];
    }
}
