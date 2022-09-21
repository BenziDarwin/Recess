<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'DOB' => fake()->date('Y-M-D'),
            'password' => fake()->password(),
            'product' => fake()->word(),
            'performance' => fake()->unique()->numberBetween(1, 200),
        ];
    }
}
