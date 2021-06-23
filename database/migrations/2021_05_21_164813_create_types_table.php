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
            $table->json('time_easy')->nullable()->default(null);
            $table->json('time_medium')->nullable()->default(null);
            $table->json('time_hard')->nullable()->default(null);

        });


        DB::table('types')->insert([

            [
                'name' => 'Silový',
                'cardio_type' => null,
                'time_easy' => null,
                'time_medium' => null,
                'time_hard' => null,
            ],
            [
                'name' => 'Kardio',
                'cardio_type' => 'Nohy',
                'time_easy' => '[30, 35]',
                'time_medium' => '[30, 35, 40]',
                'time_hard' => '[35, 40, 45]',
            ],
            [
                'name' => 'Kardio',
                'cardio_type' => 'Brucho',
                'time_easy' => '[25, 30]',
                'time_medium' => '[25, 30, 35]',
                'time_hard' => '[30, 35, 40]',
            ],
            [
                'name' => 'Statický',
                'cardio_type' => null,
                'time_easy' => '[20, 25]',
                'time_medium' => '[25, 30, 35]',
                'time_hard' => '[30, 35, 40]',
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
