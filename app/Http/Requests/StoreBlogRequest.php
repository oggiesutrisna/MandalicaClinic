<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
            'judul' => 'required|max:255',
            'deskripsi' => 'required|max:1000',
            'tag' => 'required',
            'slug' => 'required|max:255',
            'gambar' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }
}
