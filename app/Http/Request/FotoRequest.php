<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FotoRequest extends FormRequest
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
            'nama_siswa' => 'required',
            'foto_diri' => 'required',
            'foto_kk' => 'required',
            'foto_ktp' => 'required',
            'foto_ijazah' => 'required',
            'foto_keluarga' => 'required',
            'foto_akta' => 'required',

        ];
    }
}