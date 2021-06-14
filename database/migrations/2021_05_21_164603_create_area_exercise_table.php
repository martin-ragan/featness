<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaExerciseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area_exercise', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('exercise_id')->references('id')->on('exercises')->cascadeOnDelete();
            $table->foreignId('area_id')->references('id')->on('areas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('area_exercise');
    }
}
