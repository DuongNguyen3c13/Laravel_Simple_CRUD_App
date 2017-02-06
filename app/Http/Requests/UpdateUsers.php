<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsers extends FormRequest
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
            'first_name' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|max:255|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|max:255|unique:users,id,'.$this->get('id'),
        ];
    }

    public function messages() {
        return [
            'first_name.required' => 'Please fill out this field',
            'first_name.max' => 'First name must not larger than 255 characters',
            'last_name.required' => 'Please fill out this field',
            'last_name.max' => 'Last name must not larger than 255 characters',
            'email.required' => 'Please fill out this field',
            'email.email' => 'Please input a valid email address',
            'email.max' => 'Email must not larger than 255 characters',
            'email.unique' => 'This email is already taken',
            ];
    }
}
