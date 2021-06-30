<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFoodTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
        });

        DB::table('food_types')->insert([
            [ 'name' => 'Raňajky' ],
            [ 'name' => 'Obed' ],
            [ 'name' => 'Olovrant' ],
            [ 'name' => 'Večera' ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_types');
    }
}
