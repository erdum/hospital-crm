<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'patient_id' => 1,
            'physician_id' => 1,
            'start_time' => fake()->time(),
            'end_time' => fake()->time(),
            'room_id' => 1,
            'fee' => 1200
        ];
    }
}
