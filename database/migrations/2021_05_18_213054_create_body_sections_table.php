<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateBodySectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });


        DB::table('body_sections')->insert([
            ['name' => 'Horná'],
            ['name' => 'Spodná'],
            ['name' => 'Celé telo'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body_sections');
    }
}
