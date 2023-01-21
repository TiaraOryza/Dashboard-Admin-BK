<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WaliRequest extends FormRequest
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
            'nik_wali' => 'required',
            'nama_wali' => 'required',
            'alamat_wali' => 'required',
            'jenis_kelamin' => 'required',
            'agama_wali' => 'required',
            'no_hp' => 'required',
            
        ];
    }
}