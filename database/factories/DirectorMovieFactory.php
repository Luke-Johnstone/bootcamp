<?php

namespace Database\Factories;

use App\Models\Director;
use App\Models\DirectorMovie;
use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirectorMovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DirectorMovie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'director_id' =>Director::inRandomOrder()->first()->id,
            'movie_id' =>Movie::inRandomOrder()->first()->id
        ];
    }
}
