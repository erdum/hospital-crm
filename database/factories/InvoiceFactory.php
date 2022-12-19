<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
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
            'appointment_id' => 1,
            'cash_paid' => 1500,
            'discount' => 0,
            'tax' => 0,
            'total_sum' => 1200,
            'cash_returned' => 300,
            'date' => fake()->date()
        ];
    }
}
