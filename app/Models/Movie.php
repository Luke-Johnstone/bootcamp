<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Movie extends Model
{
    use HasFactory;

    public function celebrities(): Relations\BelongsToMany
    {
        return $this->belongsToMany(Celebrity::class, 'celebrity_movies');
    }

    public function director(): Relations\BelongsToMany
    {
        return $this->belongsToMany(Director::class, 'director_movies');
    }

    public function genres(): Relations\BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'genre_movies');
    }


}
