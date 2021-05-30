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
            $table->json('reps_easy');
            $table->json('reps_medium');
            $table->json('reps_hard');
        });

        DB::table('body_parts')->insert([
            [
                'name' => 'Celé nohy',
                'reps_easy' => '[8, 10, 12]',
                'reps_medium' => '[10, 12, 15]',
                'reps_hard' => '[12, 15, 20]',
            ],
            [
                'name' => 'Zadok',
                'reps_easy' => '[8, 10, 12]',
                'reps_medium' => '[10, 12, 15]',
                'reps_hard' => '[12, 15, 20]',
            ],
            [
                'name' => 'Predné stehná',
                'reps_easy' => '[8, 10, 12]',
                'reps_medium' => '[10, 12, 15]',
                'reps_hard' => '[12, 15, 20]',
            ],
            [
                'name' => 'Lýtka',
                'reps_easy' => '[8, 10, 12]',
                'reps_medium' => '[10, 12, 15]',
                'reps_hard' => '[12, 15, 20]',
            ],
            [
                'name' => 'Celý vrch',
                'reps_easy' => '[5, 6]',
                'reps_medium' => '[10, 12, 15]',
                'reps_hard' => '[12, 15, 20]',
            ],
            [
                'name' => 'Horný chrbát',
                'reps_easy' => '[8, 10]',
                'reps_medium' => '[10, 12, 15]',
                'reps_hard' => '[12, 15, 20]',
            ],
            [
                'name' => 'Spodný chrbát',
                'reps_easy' => '[8, 10]',
                'reps_medium' => '[10, 12, 15]',
                'reps_hard' => '[12, 15, 20]',
            ],
            [
                'name' => 'Priame brucho',
                'reps_easy' => '[8, 10]',
                'reps_medium' => '[10, 12, 15]',
                'reps_hard' => '[12, 15, 20]',
            ],
            [
                'name' => 'Šikmé brucho',
                'reps_easy' => '[8, 10]',
                'reps_medium' => '[10, 12, 15]',
                'reps_hard' => '[12, 15, 20]',
            ],
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
