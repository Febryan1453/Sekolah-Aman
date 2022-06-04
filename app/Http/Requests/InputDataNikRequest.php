<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class InputDataNikRequest extends FormRequest
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
            'nik'                       => 'required|min:16|unique:data_niks',
            'nama'                      => 'required',
            'tlg_lahir'                 => 'required',
            'tempat_lahir'              => 'required',
            'keterangan'                => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nik.required'              => 'NIK tidak boleh kosong.',
            'nik.min'                   => 'NIK harus 16 digit.',
            'nik.unique'                => 'NIK telah ada pada database.',
            'nama.required'             => 'Nama lengkap tidak boleh kosong.',
            'tlg_lahir.required'        => 'Tanggal lahir tidak boleh kosong.',
            'tempat_lahir.required'     => 'Tempat Lahir tidak boleh kosong.',
            'keterangan.required'       => 'Keterangan tidak boleh kosong.',
        ];
    }
}
