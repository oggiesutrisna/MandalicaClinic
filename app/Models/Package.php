<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Package extends Model
{

    use HasFactory;
    use Sluggable;

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

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
