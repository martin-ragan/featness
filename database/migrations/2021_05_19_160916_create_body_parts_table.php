<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBodyPartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('body_parts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        DB::table('body_parts')->insert([
            [ 'name' => 'Celé nohy' ],
            [ 'name' => 'Zadok' ],
            [ 'name' => 'Predné stehná' ],
            [ 'name' => 'Lýtka' ],
            [ 'name' => 'Celý vrch' ],
            [ 'name' => 'Horný chrbát' ],
            [ 'name' => 'Spodný chrbát' ],
            [ 'name' => 'Priame brucho' ],
            [ 'name' => 'Šikmé brucho' ],
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('body_parts');
    }
}
