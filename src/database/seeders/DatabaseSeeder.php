<?php

namespace Database\Seeders;

use App\Models\CourtSurface;
use Illuminate\Database\Seeder;
use Database\Seeders\CourtSurfaceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CourtSurfaceSeeder::class);
        $this->call(TennisCourtSeeder::class);
    }
}
