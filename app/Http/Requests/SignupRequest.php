<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:250|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.max' => 'Email is too long',
            'email.unique' => 'This email is already registered',
            'password.required' => 'Password is required',
            'password.max' => 'Password is too long',
            'password.min' => 'Password must be at least 8 characters long',
            'password_confirmation.max' => 'Password confirmation is too long',
            'password_confirmation.min' => 'Password confirmation must be at least 8 characters long',
            'password_confirmation.required' => 'Password confirmation is required',
            'password_confirmation.same' => 'Passwords do not match',
        ];
    }
}
