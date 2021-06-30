<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->json("ingredients");
            $table->json("recipe");
            $table->integer("kcal");
            $table->integer("proteins");
            $table->integer("carbohydrates");
            $table->integer("fats");

            $table->foreignId("food_type_id")->constrained("food_types")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food');
    }
}
