<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeluargaRequest extends FormRequest
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
            'no_kk' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'agama_ayah' => 'required',
            'agama_ibu' => 'required',
            'nik_ayah' => 'required',
            'nik_ibu' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required',
            'gaji_ayah' => 'required',
            'gaji_ibu' => 'required',

        ];
    }
}