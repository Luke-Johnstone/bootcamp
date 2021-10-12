<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Genre extends Model
{
    use HasFactory;

    public function movies() : Relations\BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'genre_movies');
    }
}
