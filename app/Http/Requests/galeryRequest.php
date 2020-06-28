<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class galeryRequest extends FormRequest
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
            'nama' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ];
    }
    public function messages()
    {
        return [
            'nama.required' => 'nama harus diisi',
            'foto.required' => 'foto harus diisi',
            'foto.image' =>  'foto berupa gambar',
            'foto.mimes' => 'format foto berupa jpeg, jpg, png, svg',
            'foto.max' => 'ukuran foto maksimal 2mb'
        ];
    }
}
