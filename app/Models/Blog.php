<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'tags',
        'gambar',
    ];

    protected $guarded = [
        'id',
    ];
    use HasFactory;
}
