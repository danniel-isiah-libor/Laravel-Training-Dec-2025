<?php

namespace App\Http\Requests;

use App\Rules\UniqueEmailRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
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
            // 'user_id' => [
            //     'required',
            //     'integer',
            //     // 'exists:users,id',
            // ],
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'max:255',
                'email:dns,strict,rfc',
                'unique:users,email',
                // new UniqueEmailRule
            ],
            'password' => [
                'required',
                'string',
                'confirmed',
                // Password::min(8)
                //     ->max(12)
                //     ->mixedCase()
                //     ->symbols()
                //     ->numbers()
                //     ->letters()
                //     ->uncompromised()
                Password::defaults(),
            ]
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'password.confirmed' => 'The password confirmation does not match.',
        ];
    }

    protected function prepareForValidation()
    {
        $userId = Cache::get('user_id');
        // Session::get('user_id');

        $this->merge([
            'user_id' => $userId,
        ]);
    }
}
