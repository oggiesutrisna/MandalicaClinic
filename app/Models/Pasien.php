<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'nohp',
        'ttl',
        'jeniskelamin',
        'dateappointment',
        'jenisappointment',
        'keterangan',
        'status',
    ];

    use HasFactory;
}
