<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddForeignIdToExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exercises', function (Blueprint $table) {
            $table->foreignId('body_part_id')->constrained('body_parts');
            $table->foreignId('body_section_id')->constrained('body_sections');
            $table->foreignId('type_id')->constrained('types');
        });

        DB::table('exercises')->insert([
            [
                'name' => 'Drep',
                'url' => '549607068',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'Drep s výskokom',
                'url' => '549607347',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'Drep s výskokom na stranu',
                'url' => '549607620',
                'body_section_id' => 2,
                'body_part_id' => 3,
                'type_id' => 1,
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
        Schema::table('exercises', function (Blueprint $table) {
            //
        });
    }
}
