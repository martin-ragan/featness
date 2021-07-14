<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEatedFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eated_food', function (Blueprint $table) {
            $table->id();
            $table->integer('breakfastCalories');
            $table->integer('lunchCalories');
            $table->integer('snackCalories');
            $table->integer('dinnerCalories');
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eated_food');
    }
}
