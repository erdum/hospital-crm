<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescribes>
 */
class PrescribesFactory extends Factory
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
            'medication_id' => 1,
            'recommended_on' => fake()->date(),
            'appointment_id' => 1,
            'dose' => '1 + 1 + 1'
        ];
    }
}
