<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->paragraph(),
            'start' => $this->faker->dateTimeInInterval('-1 month', '+90 days'),
        ];
    }
}
