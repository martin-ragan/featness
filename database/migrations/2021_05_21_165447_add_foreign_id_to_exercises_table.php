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
            $table->foreignId('body_part_id')->nullable()->constrained('body_parts');
            $table->foreignId('body_section_id')->nullable()->constrained('body_sections');
            $table->foreignId('type_id')->default(1)->constrained('types');
        });

        DB::table('exercises')->insert([
            [
                'id' => 1,
                'name' => 'Drep',
                'url' => '549607068',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Drep s výskokom',
                'url' => '549607347',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Drep s výkopom na stranu',
                'url' => '549607620',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Drep na úzko',
                'url' => '549607900',
                'body_section_id' => 2,
                'body_part_id' => 3,
                'type_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Drep pulz',
                'url' => '549608189',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Chôdza v drepe',
                'url' => '549612517',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Drep s výkopom',
                'url' => '549612802',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Drep s vysokým kolenom',
                'url' => '549613078',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Výdrž v drepe',
                'url' => '549613377',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 4,
            ],
            [
                'id' => 30,
                'name' => 'Dvíhanie panvy',
                'url' => '549623434',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 54,
                'name' => 'Kľuky na kolenách',
                'url' => '549634737',
                'body_section_id' => 1,
                'body_part_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 61,
                'name' => 'Kľuky na kolenách s rukami na úzko',
                'url' => '549639907',
                'body_section_id' => 1,
                'body_part_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 57,
                'name' => 'Priťahovanie rúk v ľahu',
                'url' => '549635760',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 58,
                'name' => 'Dvíhanie rúk v ľahu',
                'url' => '549636118',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 64,
                'name' => 'Priťahovanie rúk v predklone',
                'url' => '549640826',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 65,
                'name' => 'Rozpažovanie rúk v predklone',
                'url' => '549639620',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 69,
                'name' => 'Jumping Jacks',
                'url' => '549652105',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 70,
                'name' => 'Jumping Jacks s rozpažovaním',
                'url' => '549650556',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 75,
                'name' => 'Neviditeľné švihadlo',
                'url' => '549659858',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 77,
                'name' => 'Beh na mieste',
                'url' => '549666934',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 83,
                'name' => 'Zakopávanie na mieste',
                'url' => '549670489',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
        ]);

        DB::table('difficulty_exercise')->insert([
            [
                'exercise_id' => 1,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 1,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 1,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 2,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 2,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 3,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 3,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 3,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 4,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 4,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 4,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 5,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 5,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 5,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 6,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 6,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 6,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 7,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 7,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 7,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 8,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 8,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 8,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 9,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 9,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 9,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 30,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 30,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 30,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 54,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 54,
                'difficulty_id' => 2,
            ],



            [
                'exercise_id' => 61,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 61,
                'difficulty_id' => 2,
            ],



            [
                'exercise_id' => 57,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 57,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 57,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 58,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 58,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 58,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 64,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 64,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 64,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 65,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 65,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 65,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 69,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 69,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 69,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 70,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 70,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 70,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 75,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 75,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 75,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 77,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 77,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 77,
                'difficulty_id' => 3,
            ],



            [
                'exercise_id' => 83,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 83,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 83,
                'difficulty_id' => 3,
            ],




        ]);


        DB::table('area_exercise')->insert([
            [
                'exercise_id' => 1,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 2,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 3,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 4,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 5,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 6,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 7,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 8,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 9,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 30,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 54,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 61,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 57,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 58,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 64,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 64,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 65,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 69,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 69,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 70,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 70,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 75,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 75,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 77,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 77,
                'area_id' => 2,
            ],



            [
                'exercise_id' => 83,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 83,
                'area_id' => 2,
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
