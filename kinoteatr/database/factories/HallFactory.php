<?php

namespace Database\Factories;

use App\Models\Hall;
use Illuminate\Database\Eloquent\Factories\Factory;

class HallFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hall::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Hall name ' . $this->faker->word,
            'number' => $this->faker->numberBetween(100, 200),
            'cinema_id' => $this->faker->numberBetween(1, 6),
        ];
    }
}
