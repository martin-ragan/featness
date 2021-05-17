<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->id();
            $table->string('url')->unique();
            $table->string('name')->unique();

            $table->foreignId('body_part_id')->constrained('body_parts');

        });

        DB::table('exercises')->insert([
            [
                'name' => 'Drep',
                'url' => '549607068',
                'body_part_id' => 2,
            ],
            [
                'name' => 'Drep s výskokom',
                'url' => '549607347',
                'body_part_id' => 2,
            ],
            [
                'name' => 'Drep s výskokom na stranu',
                'url' => '549607620',
                'body_part_id' => 2,
            ],
            [
                'name' => 'Drep na úzko',
                'url' => '549607900',
                'body_part_id' => 2,
            ],
            [
                'name' => 'Drep pulz',
                'url' => '549608189',
                'body_part_id' => 2,
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
        Schema::dropIfExists('exercises');
    }
}
