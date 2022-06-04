<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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

    public function rules()
    {
        return [
            'email'                     => 'required|unique:users',
            'name'                      => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required'            => 'Email cannot be empty.',
            'email.unique'              => 'Email has been registered.',
            'name.required'             => 'Name cannot be empty.',
        ];
    }
}
