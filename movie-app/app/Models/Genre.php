<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genre = [
        [
            'no' => 1,
            'genre' => 'komedi',
            'deskripsi' => 'lucu',
        ],
        [
            'no' => 2,
            'genre' => 'romance',
            'deskripsi' => 'romantis',
        ],
        [
            'no' => 3,
            'genre' => 'horor',
            'deskripsi' => 'seram',
        ],
        [
            'no' => 4,
            'genre' => 'action',
            'deskripsi' => 'menegangkan',
        ],
        [
            'no' => 5,
            'genre' => 'thriller',
            'deskripsi' => 'seru',
        ],
    ];

    public function getAllGenre()
    {
        return $this->genre;
    }
}
