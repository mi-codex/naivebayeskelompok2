<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
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
            'nama_mhs' => 'required|max:255',
            'penanggung' => 'required|max:255',
            'penghasilan' => 'required|max:255',
            'rumah' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'pekerjaan' => 'required|max:255',
            'jumlah_tanggungan' => 'required|max:255',
            'usia' => 'required|max:255',
            'nilai_un' => 'required|max:255',
        ];
    }
}
