<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Film::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Film ' . $this->faker->word,
//            'film_start' => $this->faker->date('Y-m-d','now',),
//            'film_go' => $this->faker->date('Y-m-d','now',),
//            'film_end' => $this->faker->date('Y-m-d','now',),
            'price' => $this->faker->numberBetween(50, 100),
        ];
    }
}
