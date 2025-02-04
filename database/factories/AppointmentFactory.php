<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'appointment_date' => fake()->dateTimeBetween('now', '6 months'),
            'appointment_type' => fake()->randomElement(['consultation']),
            'appointment_status' => 'pending',
            'notes' => fake()->paragraph(5),
        ];
    }
}
