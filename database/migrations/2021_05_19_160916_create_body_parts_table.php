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
            $table->boolean('both_parts')->default(false);
            $table->json('reps_easy')->nullable();
            $table->json('reps_medium')->nullable();
            $table->json('reps_hard')->nullable();
        });

        DB::table('body_parts')->insert([
            [
                'name' => 'Celé nohy',
                'both_parts' => false,
                'reps_easy' => '[8, 9, 10]',
                'reps_medium' => '[10, 12, 14]',
                'reps_hard' => '[12, 14, 16]',
            ],
            [
                'name' => 'Celé nohy',
                'both_parts' => true,
                'reps_easy' => '[8, 9, 10]',
                'reps_medium' => '[9, 10, 12]',
                'reps_hard' => '[10, 12, 14]',
            ],
            [
                'name' => 'Zadok',
                'both_parts' => false,
                'reps_easy' => '[8, 10, 12]',
                'reps_medium' => '[10, 12, 14]',
                'reps_hard' => '[12, 14, 16]',
            ],
            [
                'name' => 'Zadok',
                'both_parts' => true,
                'reps_easy' => '[6, 7, 8]',
                'reps_medium' => '[8, 9, 10]',
                'reps_hard' => '[10, 12, 14]',
            ],
            [
                'name' => 'Predné stehná',
                'both_parts' => false,
                'reps_easy' => '[8, 10, 12]',
                'reps_medium' => '[10, 12, 14]',
                'reps_hard' => '[12, 14, 16]',
            ],
            [
                'name' => 'Celý vrch',
                'both_parts' => false,
                'reps_easy' => '[6, 7]',
                'reps_medium' => '[7, 8, 9]',
                'reps_hard' => '[7, 8, 9]',
            ],
            [
                'name' => 'Horný chrbát',
                'both_parts' => false,
                'reps_easy' => '[8, 9, 10]',
                'reps_medium' => '[10, 12, 14]',
                'reps_hard' => '[10, 12, 14, 15]',
            ],
            [
                'name' => 'Horný chrbát',
                'both_parts' => true,
                'reps_easy' => '[6, 8]',
                'reps_medium' => '[6, 7, 8]',
                'reps_hard' => '[7, 8, 9]',
            ],
            [
                'name' => 'Spodný chrbát',
                'both_parts' => false,
                'reps_easy' => '[8, 9, 10]',
                'reps_medium' => '[8, 10, 12]',
                'reps_hard' => '[10, 12, 14]',
            ],
            [
                'name' => 'Priame brucho',
                'both_parts' => false,
                'reps_easy' => '[8, 9, 10]',
                'reps_medium' => '[10, 12, 14]',
                'reps_hard' => '[12, 14, 15, 16]',
            ],
            [
                'name' => 'Priame brucho',
                'both_parts' => true,
                'reps_easy' => '[8, 9]',
                'reps_medium' => '[9, 10, 12]',
                'reps_hard' => '[10, 12, 14, 15]',
            ],
            [
                'name' => 'Šikmé brucho',
                'both_parts' => true,
                'reps_easy' => '[6, 7, 8]',
                'reps_medium' => '[8, 9, 10]',
                'reps_hard' => '[9, 10, 12, 14]',
            ],
            [
                'name' => 'Krk',
                'both_parts' => false,
                'reps_easy' => null,
                'reps_medium' => null,
                'reps_hard' => null,
            ],
            [
                'name' => 'Ramená',
                'both_parts' => false,
                'reps_easy' => null,
                'reps_medium' => null,
                'reps_hard' => null,
            ],
            [
                'name' => 'Zadné stehná',
                'both_parts' => false,
                'reps_easy' => null,
                'reps_medium' => null,
                'reps_hard' => null,
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
