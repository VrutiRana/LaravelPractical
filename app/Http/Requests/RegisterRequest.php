<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|unique:email',
            'password' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'   => 'Name is required',
            'email.required'        =>  'Email is Required',
            'email.unique'        =>  'Email should be unique',
            'email.email'          => 'Please enter valid email id',
            'password.required'     =>  'Password is required',
        ];
    }
}
