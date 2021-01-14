<?php

namespace Database\Seeders;

use App\Models\TennisCourt;
use Illuminate\Database\Seeder;

final class TennisCourtSeeder extends Seeder
{
    private $numberOfCourts = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TennisCourt::factory($this->numberOfCourts)->create();
    }
}
