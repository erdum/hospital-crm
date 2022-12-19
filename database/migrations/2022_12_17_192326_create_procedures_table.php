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
        Schema::create('procedures', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('physician_id')->constrained('physicians');
            $table->foreignId('nurse_id')->constrained('nurses');
            $table->foreignId('stay_id')->constrained('stays');
            $table->date('undergoes_on');
            $table->integer('cost');
            $table->timestamps();
            $table->unique(['patient_id', 'stay_id', 'undergoes_on']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedures');
    }
};
