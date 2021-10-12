<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Celebrity extends Model
{
    use HasFactory;

    public function movies(): Relations\BelongsToMany
    {
        return $this->belongsToMany(Movie::class, 'celebrity_movies');
    }
}
