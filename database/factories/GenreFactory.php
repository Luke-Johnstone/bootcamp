<?php

namespace Database\Factories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Factories\Factory;

class GenreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Genre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->genreRandom(),
            'description' => $this->faker->sentence
        ];
    }

    public function genreRandom() {
        $genres = ['Action','Adventure','Comedy','Horror','Thriller'];

        return $genres[array_rand($genres)];
    }
}
