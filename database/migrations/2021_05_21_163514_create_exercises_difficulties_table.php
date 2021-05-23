<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesDifficultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises_difficulties', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')->references('id')->on('exercises');
            $table->foreignId('difficulty_id')->references('id')->on('difficulties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises_difficulties');
    }
}
