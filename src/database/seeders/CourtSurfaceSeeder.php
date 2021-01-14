<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Collection;
use App\Models\CourtSurface;
use Illuminate\Database\Seeder;

final class CourtSurfaceSeeder extends Seeder
{
    private int $numberOfSurfaces = 3;
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //CourtSurface::factory()->create();
        $this->courtSurface = CourtSurface::factory($this->numberOfSurfaces)->create([
            'name' => 'Carpet',
            'description' => '"Carpet" in tennis means any removable court covering. Indoor arenas store rolls of rubber-backed court surfacing and install it temporarily for tennis events, but they are not in use any more for professional events. A short piled form of artificial turf infilled with sand is used for some outdoor courts, particularly in Asia. Carpet is generally a fast surface, faster than hardcourt, with low bounce.'
        ]);
    }
}
