<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Package extends Model
{
    protected $fillable = [
        'nama', 'harga', 'keterangan', 'slug', 'categories',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama',
            ]
        ];
    }

    use Sluggable;
    use HasFactory;
}
