<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescribes', function (Blueprint $table) {
            $table->foreignId('physician_id')->constrained('physicians');
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('medication_id')->constrained('medications');
            $table->date('recommended_on');
            $table->foreignId('appointment_id')->constrained('appointments');
            $table->text('dose');
            $table->timestamps();
            $table->unique(['physician_id', 'patient_id', 'medication_id', 'recommended_on']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescribes');
    }
};
