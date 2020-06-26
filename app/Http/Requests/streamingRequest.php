<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class streamingRequest extends FormRequest
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'link' => 'required',
            'tanggal_tayang' => 'required|after_or_equal:'.date('d-m-Y')
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'judul harus diisi',
            'deskripsi.required' => 'deskripsi harus diisi',
            'foto.image' => 'file harus berupa foto',
            'foto.mimes' => 'format file hanya boleh jpeg, png, jpg, atau svg',
            'foto.max' => 'ukuran foto maksimal 2mb',
            'link.required' => 'link harus diisi',
            'tanggal_tayang.required' => 'tanggal tayang harus diisi',
            'tanggal_tayang.after_or_equal' => 'tanggal tayang harus setelah atau sama dengan hari ini'
        ];
    }
}
