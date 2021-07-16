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
            $table->foreignId('breakfast_id')->nullable()->default(null);
            $table->foreignId('lunch_id')->nullable()->default(null);
            $table->foreignId('snack_id')->nullable()->default(null);
            $table->foreignId('dinner_id')->nullable()->default(null);
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->timestamps();
        });

        \Illuminate\Support\Facades\DB::table('eated_food')->insert([
            [
                'breakfast_id' => null,
                'lunch_id' => null,
                'snack_id' => null,
                'dinner_id' => null,
                'user_id' => 1
            ]
        ]);
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
