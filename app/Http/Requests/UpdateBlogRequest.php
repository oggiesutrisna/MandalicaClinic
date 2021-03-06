<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogRequest extends FormRequest
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
            'judul' => 'max:255',
            'deskripsi' => 'max:255',
            'tag' => 'max:255',
            'gambar' => 'mimes:png,jpg,jpeg,gif,svg|max:2048',
        ];
    }
}
