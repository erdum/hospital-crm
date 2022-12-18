<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medication>
 */
class MedicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'certolizumab',
            'brand' => 'Cimzia',
            'description' => 'Certolizumab is a drug that reduces the signs and symptoms of moderate to severe rheumatoid arthritis (RA)'
        ];
    }
}
