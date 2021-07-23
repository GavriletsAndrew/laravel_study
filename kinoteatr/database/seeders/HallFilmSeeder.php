<?php

namespace Database\Seeders;

use App\Models\HallFilm;
use Illuminate\Database\Seeder;

class HallFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HallFilm::factory(100)->create();
    }
}
