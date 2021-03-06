<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateObatRequest extends FormRequest
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
            'kode_obat' => 'required|unique:obats,kode_obat,'.$this->obat->id,
            'nama_obat' => 'required',
            'jenis_obat' => 'required',
            'harga_obat' => 'required',
            'stok_obat' => 'required',
            'keterangan' => 'required',
        ];
    }
}
