<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("cardio_type")->nullable()->default(null);

        });


        DB::table('types')->insert([

            [
                'name' => 'Silový',
                'cardio_type' => null,
            ],
            [
                'name' => 'Kardio',
                'cardio_type' => 'Nohy',
            ],
            [
                'name' => 'Kardio',
                'cardio_type' => 'Brucho',
            ],
            [
                'name' => 'Statický',
                'cardio_type' => null,
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
        Schema::dropIfExists('types');
    }
}
