<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Procedure>
 */
class ProcedureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Skin Biopsy',
            'patient_id' => 1,
            'physician_id' => 1,
            'nurse_id' => 1,
            'stay_id' => 1,
            'department_id' => 1,
            'undergoes_on' => fake()->date(),
            'cost' => 100000
        ];
    }
}
