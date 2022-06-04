<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CariRequest extends FormRequest
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
            'nik'                       => 'required|min:16',
        ];
    }

    public function messages()
    {
        return [
            'nik.required'              => 'NIK tidak boleh kosong.',
            'nik.min'                   => 'NIK harus 16 digit.',
        ];
    }
}
