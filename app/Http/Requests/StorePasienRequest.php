<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePasienRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'nohp' => 'required|max:255',
            'ttl' => 'required|max:255',
            'jeniskelamin' => 'required|max:255',
            'dateappointment' => 'required|max:255',
            'jenisappointment' => 'required|max:255',
            'keterangan' => 'required|max:255',
            'status' => 'required|max:255',
        ];
    }
}
