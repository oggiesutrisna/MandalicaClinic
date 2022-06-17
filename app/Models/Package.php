<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Package extends Model
{
    protected $fillable = [
        'categories', 'nama', 'harga', 'keterangan', 'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama',
            ]
        ];
    }

    use HasFactory;
    use Sluggable;
}
