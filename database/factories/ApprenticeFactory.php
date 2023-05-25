<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Course;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apprentices>
 */
class ApprenticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'document_number' => "1".fake()->unique()->randomNumber(9, true),
            'email' => fake()->unique()->email(),
            'telephone'  => "3".fake()->unique()->randomNumber(9, true),
            'course_id' => Course::inRandomOrder()->first()->id
        ];
    }
}
