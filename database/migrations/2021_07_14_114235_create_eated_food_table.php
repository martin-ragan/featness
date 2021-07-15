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
            $table->foreignId('breakfast_id')->nullable();
            $table->foreignId('lunch_id')->nullable();
            $table->foreignId('snack_id')->nullable();
            $table->foreignId('dinner_id')->nullable();
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
