<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crud>
 */
class CrudFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->faker->name(),                // generates a full name
            'section' => $this->faker->words(2, true),     // 2 words as a string, suitable for a section
            'age' => $this->faker->numberBetween(21, 35), // random age between 21 and 35
        ];
    }
}
