<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tenantRequest extends FormRequest
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
            'deskripsi' => 'required',
            'kategori_usaha' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video'=>'required',
            'link' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'nama harus diisi',
            'deskripsi.required' => 'deskripsi harus diisi',
            'kategori_usaha.required' => 'kategori usaha harus diisi',
            'foto.image' => 'foto harus berupa gambar',
            'foto.mimes' => 'foto harus bertipe jpeg/png/jpg/gif/svg',
            'foto.max' => 'ukuran foto maksimal 2Mb',
            'video.required'=>'video harus diisi',
            'link.required' => 'link harus diisi'
        ];
    }
}
