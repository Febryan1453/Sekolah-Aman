<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditDataNikRequest extends FormRequest
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
            'nama'                      => 'required',
            'tlg_lahir'                 => 'required',
            'tempat_lahir'              => 'required',
            'keterangan'                => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama.required'             => 'Nama lengkap tidak boleh kosong.',
            'tlg_lahir.required'        => 'Tanggal lahir tidak boleh kosong.',
            'tempat_lahir.required'     => 'Tempat Lahir tidak boleh kosong.',
            'keterangan.required'       => 'Keterangan tidak boleh kosong.',
        ];
    }
}
