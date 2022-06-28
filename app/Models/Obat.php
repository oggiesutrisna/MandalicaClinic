<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $fillable = [
        'kode_obat',
        'nama_obat',
        'jenis_obat',
        'harga_obat',
        'stok_obat',
        'keterangan'
    ];

    protected $guarded = [
        'id',
    ];

    use HasFactory;
}
