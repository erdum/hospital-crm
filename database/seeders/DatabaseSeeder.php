<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create();
        \App\Models\Physician::factory()->create();
        \App\Models\Nurse::factory()->create();
        \App\Models\Patient::factory()->create();
        \App\Models\Room::factory()->create();
        \App\Models\Appointment::factory()->create();
        \App\Models\Stay::factory()->create();
        \App\Models\Department::factory()->create();
        \App\Models\Medication::factory()->create();
        \App\Models\Prescribes::factory()->create();
        \App\Models\Procedure::factory()->create();
        \App\Models\Invoice::factory()->create();
    }
}
