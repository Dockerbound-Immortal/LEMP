<?php

namespace Database\Factories;

use App\Models\TennisCourt;
use Illuminate\Database\Eloquent\Factories\Factory;

class TennisCourtFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TennisCourt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'free_access' => 'free',
            'num_of_courts' => rand(1,10),
            'disabled_access' => 'none',
            'long' => 53.712960,
            'lat' => -1.897762,
            'court_surface_id' => 1
        ];
    }
}
