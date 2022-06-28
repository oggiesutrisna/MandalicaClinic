<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreObatRequest extends FormRequest
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
            'kode_obat' => 'required|max:30',
            'nama_obat' => 'required|max:255',
            'jenis_obat' => 'required|max:255',
            'harga_obat' => 'required|max:12',
            'stok_obat' => 'required|max:12',
            'keterangan' => 'required|max:255',
        ];
    }
}
