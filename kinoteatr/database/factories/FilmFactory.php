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
            'film_start' => $this->faker->dateTime($max = 'now', $timezone = null),
            'film_go' => $this->faker->dateTime($max = 'now', $timezone = null),
            'film_end' => $this->faker->dateTime($max = 'now', $timezone = null),
            'price' => $this->faker->numberBetween(50, 100),
        ];
    }
}
