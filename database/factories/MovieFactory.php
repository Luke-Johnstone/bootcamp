<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

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

        return [
            'title' => $this->faker->sentence,
            'rating' => $this->ratingRandom(),
            'description' => $this->faker->sentence
        ];
    }

    public function ratingRandom() {
        $ratings = ['G','PG','M','MA','R'];

        return $ratings[array_rand($ratings)];
    }
}
