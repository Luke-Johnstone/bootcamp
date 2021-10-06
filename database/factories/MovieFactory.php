<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $genre = DB::table('genres')->first();
        return [
            'title' => $this->faker->sentence,
            'genre' => $genre->id,
            'rating' => $this->ratingRandom(),
            'description' => $this->faker->paragraph,
            'director' => $this->faker->name
        ];
    }

//    public function genreRandom() {
//        $genres = ['Action','Adventure','Comedy','Horror','Thriller'];
//
//        return $genres[array_rand($genres)];
//    }

    public function ratingRandom() {
        $ratings = ['G','PG','M','MA','R'];

        return $ratings[array_rand($ratings)];
    }
}
