<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'ISBN',
        'publisher',
        'publication_date',
        'genre',
        'availability',
        'description',
        'cover_image',
    ];

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }


}
