<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'tag',
        'gambar',
    ];

    protected $guarded = [
        'id',
    ];
    use HasFactory;
}
