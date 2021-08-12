<?php

namespace Database\Factories;

use App\Models\HallFilm;
use Illuminate\Database\Eloquent\Factories\Factory;

class HallFilmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HallFilm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'film_id'=>$this->faker->numberBetween(1,30),
            'cinema_id'=>$this->faker->numberBetween(2,6),
        ];
    }
}
