<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nisn' => 'required',
            'no_absen' => 'required',
            'nama_siswa' => 'required',
            'id_kelas' => 'required',
            'kota_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama_siswa' => 'required',
            'jk_siswa' => 'required',
            'goldar_siswa' => 'required',
            'anak_ke' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_kk' => 'required',
            'nik_wali' => 'required',

        ];
    }
}