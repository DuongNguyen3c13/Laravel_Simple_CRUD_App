<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique',
            'password' => 'required|min:6',
        ];
    }

    public function messages() {
        'first_name.required' => 'Please fill out this field',
        'first_name.max' => 'Your input must not larger than 255 characters',
        'last_name.required' => 'Please fill out this field',
        'last_name.max' => 'Your input must not larger than 255 characters',
        'email.required' => 'Please fill out this field',
        'email.email' => 'Please input a valid email address',
        'email.max' => 'Your input must not larger than 255 characters',
        'email.unique' => 'This email is already taken',
        'password.required' => 'Please fill out this field',
        'password.min' => 'Only more than 6-character password is accepted'
    }
}