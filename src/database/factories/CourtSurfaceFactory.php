<?php

namespace Database\Factories;

use App\Models\CourtSurface;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourtSurfaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourtSurface::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text
        ];
    }
}
