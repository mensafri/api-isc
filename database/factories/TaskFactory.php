<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'       => $this->faker->sentence(3),          // ex: "Review project plan"
            'description' => $this->faker->optional()->paragraph // nullable
        ];
    }
}
