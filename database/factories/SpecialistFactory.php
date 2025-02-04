<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialist>
 */
class SpecialistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'speciality' => fake()->jobTitle(),
            'license_number' => fake()->buildingNumber(),
            'experience_years' => fake()->randomNumber(),
            'clinic_address' => fake()->address(),
        ];
    }
}
