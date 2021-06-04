<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddForeignIdToExercisesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('exercises', function(Blueprint $table) {
            $table->foreignId('body_part_id')->nullable()->constrained('body_parts');
            $table->foreignId('body_section_id')->nullable()->constrained('body_sections');
            $table->foreignId('type_id')->nullable()->constrained('types');
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
                'body_part_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Drep - pulz',
                'url' => '549608189',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 4,
            ],
            [
                'id' => 6,
                'name' => 'Chôdza v drepe',
                'url' => '549612517',
                'body_section_id' => 2,
                'body_part_id' => 3,
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
                'id' => 10,
                'name' => 'Kmitanie kolenami v podrepe',
                'url' => '549612261',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 4,
            ],
            [
                'id' => 11,
                'name' => 'Kreslenie trojuholníka v podrepe (každou nohou)',
                'url' => '549619758',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 4,
            ],
            [
                'id' => 12,
                'name' => 'Striedavé výpady vpred (každou nohou)',
                'url' => '556561797',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 4,
            ],
            [
                'id' => 13,
                'name' => 'Striedavé výpady vzad (každou nohou)',
                'url' => '549619876',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 14,
                'name' => 'Striedavé výpady vzad do strán (každou nohou)',
                'url' => '556562443',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 15,
                'name' => 'Striedavé výpady na stranu (každou nohou)',
                'url' => '549619684',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 16,
                'name' => 'Striedavé výpady s výskokom (každou nohou)',
                'url' => '549620649',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 17,
                'name' => 'Výdrž vo výpade (každou nohou)',
                'url' => '549620713',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 18,
                'name' => 'Kmity vo výpade (každou nohou)',
                'url' => '549620797',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 4,
            ],
            [
                'id' => 19,
                'name' => 'Výpad na mieste (každou nohou)',
                'url' => '549620860',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 20,
                'name' => 'Výpad vzad s vysokým kolenom (každou nohou)',
                'url' => '549620607',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 21,
                'name' => 'Výpady na stranu s vysokým kolenom (každou nohou)',
                'url' => '556562099',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 22,
                'name' => 'Výpad vzad s rotáciou trupu (každou nohou)',
                'url' => '549622813',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 23,
                'name' => 'Výpad vzad so zanožením (každou nohou)',
                'url' => '549622898',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],
            [
                'id' => 24,
                'name' => 'Drep s výpadom vzad striedavo',
                'url' => '549622957',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 25,
                'name' => 'Sumo drep',
                'url' => '549622645',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 26,
                'name' => 'Výdrž v sumo drepe so striedavým dvíhaním chodidiel',
                'url' => '549623501',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 4,
            ],
            [
                'id' => 27,
                'name' => 'Sumo drep - pulz',
                'url' => '549623569',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 4,
            ],


            //chyba 28 a 29


            [
                'id' => 30,
                'name' => 'Dvíhanie panvy',
                'url' => '549623434',
                'body_section_id' => 2,
                'body_part_id' => 3,
                'type_id' => 1,
            ],
            [
                'id' => 31,
                'name' => 'Výdrž s dvihnutou panvou',
                'url' => '549624269',
                'body_section_id' => 2,
                'body_part_id' => 3,
                'type_id' => 4,
            ],
            [
                'id' => 32,
                'name' => 'Dvíhanie panvy na jednej nohe (každou nohou)',
                'url' => '549624331',
                'body_section_id' => 2,
                'body_part_id' => 4,
                'type_id' => 1,
            ],
            [
                'id' => 33,
                'name' => 'Zanoženie na štyroch (každou nohou)',
                'url' => '549624390',
                'body_section_id' => 2,
                'body_part_id' => 4,
                'type_id' => 1,
            ],


            //34 chyba


            [
                'id' => 35,
                'name' => 'Unoženie na štyroch (každou nohou)',
                'url' => '549624198',
                'body_section_id' => 2,
                'body_part_id' => 4,
                'type_id' => 1,
            ],

            //36 chyba


            [
                'id' => 37,
                'name' => 'Zakopávanie na štyroch (každou nohou)',
                'url' => '549626285',
                'body_section_id' => 2,
                'body_part_id' => 4,
                'type_id' => 1,
            ],


            //38 chyba


            [
                'id' => 39,
                'name' => 'Kľak - sed',
                'url' => '549626863',
                'body_section_id' => 2,
                'body_part_id' => 3,
                'type_id' => 1,
            ],
            [
                'id' => 40,
                'name' => 'Kľak - sed na jednej nohe (každou nohou)',
                'url' => '549625757',
                'body_section_id' => 2,
                'body_part_id' => 4,
                'type_id' => 1,
            ],


            //41 chyba


            [
                'id' => 42,
                'name' => 'Dvíhanie sa z kľaku do drepu',
                'url' => '549628345',
                'body_section_id' => 2,
                'body_part_id' => 3,
                'type_id' => 4,
            ],


            //43 chyba


            [
                'id' => 44,
                'name' => 'Dvíhanie spodnej nohy v ľahu na boku (každou nohou)',
                'url' => '549628946',
                'body_section_id' => 2,
                'body_part_id' => 4,
                'type_id' => 4,
            ],
            [
                'id' => 45,
                'name' => 'Zanožovanie vo vzpore (každou nohou)',
                'url' => '549627757',
                'body_section_id' => 2,
                'body_part_id' => 4,
                'type_id' => 1,
            ],


            // 46 a 47 chyba


            [
                'id' => 48,
                'name' => 'Zanožovanie v planku (každou nohou)',
                'url' => '549630570',
                'body_section_id' => 2,
                'body_part_id' => 4,
                'type_id' => 1,
            ],


            // 49 - 51 chyba


            [
                'id' => 52,
                'name' => 'Dvíhanie vrchnej nohy v ľahu na boku',
                'url' => '549634170',
                'body_section_id' => 2,
                'body_part_id' => 3,
                'type_id' => 1,
            ],
            [
                'id' => 53,
                'name' => 'Kľuky',
                'url' => '549634418',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 54,
                'name' => 'Kľuky na kolenách',
                'url' => '549634737',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 55,
                'name' => 'Kľuky na kolenách s predpažením',
                'url' => '549633496',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 56,
                'name' => 'Kľuky na kolenách s dotykom ramena',
                'url' => '549635407',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 57,
                'name' => 'Priťahovanie rúk v ľahu',
                'url' => '549635760',
                'body_section_id' => 1,
                'body_part_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 58,
                'name' => 'Dvíhanie rúk v ľahu',
                'url' => '549636118',
                'body_section_id' => 1,
                'body_part_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 59,
                'name' => 'Priťahovanie ruky vo vzpore (každou rukou)',
                'url' => '549636431',
                'body_section_id' => 1,
                'body_part_id' => 8,
                'type_id' => 1,
            ],
            [
                'id' => 60,
                'name' => 'Dvíhanie rúk a nôh v ľahu',
                'url' => '549635156',
                'body_section_id' => 1,
                'body_part_id' => 9,
                'type_id' => 1,
            ],
            [
                'id' => 61,
                'name' => 'Kľuky na kolenách s rukami na úzko',
                'url' => '549639907',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],


            // 62 chyba


            [
                'id' => 63,
                'name' => 'Dvíhanie sa z planku do vzporu',
                'url' => '549640511',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 64,
                'name' => 'Priťahovanie rúk v predklone',
                'url' => '549640826',
                'body_section_id' => 1,
                'body_part_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 65,
                'name' => 'Rozpažovanie rúk v predklone',
                'url' => '549639620',
                'body_section_id' => 1,
                'body_part_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 66,
                'name' => 'Angličáky s výskokom',
                'url' => '549650977',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 67,
                'name' => 'Angličáky bez výskoku',
                'url' => '549651354',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 68,
                'name' => 'Angličáky do drepu',
                'url' => '549651739',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
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
                'id' => 71,
                'name' => 'Ručkovanie',
                'url' => '549660352',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 72,
                'name' => 'Ručkovanie s ľahom',
                'url' => '549660727',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 73,
                'name' => 'Ručkovanie s dotykom ramien a kolien',
                'url' => '549661064',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 74,
                'name' => 'Ručkovanie s dvomi kmitmi v drepe',
                'url' => '549661435',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 75,
                'name' => 'Neviditeľné švihadlo',
                'url' => '549659858',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],


            // 76 chyba


            [
                'id' => 77,
                'name' => 'Beh na mieste',
                'url' => '549666934',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 78,
                'name' => 'Skákanie so striedaním nôh',
                'url' => '549668930',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 79,
                'name' => 'Cik - Cak Panák',
                'url' => '549669205',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 80,
                'name' => 'Jumping jacks s drepom',
                'url' => '549666241',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 81,
                'name' => 'Priťahovanie rúk v podrepe',
                'url' => '549669858',
                'body_section_id' => 1,
                'body_part_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 82,
                'name' => 'Box na mieste',
                'url' => '549670199',
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
            [
                'id' => 84,
                'name' => 'Beh do strán',
                'url' => '549671193',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 2,
            ],
            [
                'id' => 85,
                'name' => 'Výpad vzad s vysokým kolenom a výskokom (každou nohou)',
                'url' => '549669554',
                'body_section_id' => 2,
                'body_part_id' => 2,
                'type_id' => 1,
            ],


            // 86 chyba


            [
                'id' => 87,
                'name' => 'Kľuk s ľahom a priťahovaním rúk',
                'url' => '549680247',
                'body_section_id' => 1,
                'body_part_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 88,
                'name' => 'Vzpor so striedavou rotáciou trupu',
                'url' => '549680526',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 89,
                'name' => 'Vzpor so striedavým dotykom špičiek',
                'url' => '549680825',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 90,
                'name' => 'Horolezec',
                'url' => '549679530',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 91,
                'name' => 'Horolezec s priťahovaním kolien k lakťom',
                'url' => '556564310',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 92,
                'name' => 'Skákanie s nohami vo vzpore',
                'url' => '556564626',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 93,
                'name' => 'Drep s dvihnutím špičiek a rúk',
                'url' => '556565006',
                'body_section_id' => 2,
                'body_part_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 94,
                'name' => 'Striedavá dlaň – špička v stoji (na každú stranu)',
                'url' => '556565422',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 95,
                'name' => 'Striedavý lakeť – koleno v stoji (na každú stranu)',
                'url' => '556563974',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 96,
                'name' => 'Dvíhanie pokrčených nôh v ľahu',
                'url' => '556576831',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 97,
                'name' => 'Priťahovanie trupu ku kolenám na štyroch',
                'url' => '556577179',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 982,
                'name' => 'Striedavá dlaň – špička v ľahu (na každú stranu)',
                'url' => '556577568',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 98,
                'name' => 'Striedavá dlaň – koleno na štyroch (na každú stranu)',
                'url' => '556577932',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
            ],


            // 99 chyba


            [
                'id' => 100,
                'name' => 'Skracovačky na stranu s pokrčenými nohami (na každú stranu)',
                'url' => '556583322',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 101,
                'name' => 'Russian twist s nohmi na zemi (na každú stranu)',
                'url' => '557612043',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 1012,
                'name' => 'Russian twist (na každú stranu)',
                'url' => '558010885',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 102,
                'name' => 'Výdrž v ľahu s nohami nad zemou',
                'url' => '556584054',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
            ],
            [
                'id' => 103,
                'name' => 'Striedavý lakeť – koleno s nohami vo vzduchu (na každú stranu)',
                'url' => '557612780',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 104,
                'name' => 'Plank',
                'url' => '556583016',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
            ],
            [
                'id' => 105,
                'name' => 'Plank s vytáčaním trupu (na každú stranu)',
                'url' => '556585162',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 106,
                'name' => 'Plank s presunom dopredu a dozadu',
                'url' => '556585444',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],


            // 107 chyba link na video


            [
                'id' => 108,
                'name' => 'Výdrž na štyroch',
                'url' => '556586011',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
            ],
            [
                'id' => 109,
                'name' => 'Úklony hlavy do všetkých strán',
                'url' => '556584956',
                'body_section_id' => null,
                'body_part_id' => 13,
                'type_id' => null,
            ],
            [
                'id' => 110,
                'name' => 'Naťahovanie ramien',
                'url' => '556587470',
                'body_section_id' => null,
                'body_part_id' => 14,
                'type_id' => null,
            ],
            [
                'id' => 111,
                'name' => 'Uvoľnenie spodného chrbta v ľahu',
                'url' => '556587869',
                'body_section_id' => null,
                'body_part_id' => 9,
                'type_id' => null,
            ],
            [
                'id' => 112,
                'name' => 'Predklon ku špičkám v sede',
                'url' => '556588135',
                'body_section_id' => null,
                'body_part_id' => 15,
                'type_id' => null,
            ],
            [
                'id' => 113,
                'name' => 'Poloha dieťaťa',
                'url' => '556588417',
                'body_section_id' => null,
                'body_part_id' => 9,
                'type_id' => null,
            ],
            [
                'id' => 114,
                'name' => 'Priťahovanie kolien do strán v ľahu',
                'url' => '556587130',
                'body_section_id' => null,
                'body_part_id' => 9,
                'type_id' => null,
            ],
            [
                'id' => 115,
                'name' => 'Naťahovanie zadných stehien v ľahu',
                'url' => '557613414',
                'body_section_id' => null,
                'body_part_id' => 15,
                'type_id' => null,
            ],
            [
                'id' => 116,
                'name' => 'Rotácia trupu s prekríženými nohami v sede',
                'url' => '556589479',
                'body_section_id' => null,
                'body_part_id' => 9,
                'type_id' => null,
            ],


            // 117 a 118 chyba


            [
                'id' => 119,
                'name' => 'Motýľ',
                'url' => '556588795',
                'body_section_id' => null,
                'body_part_id' => 15,
                'type_id' => null,
            ],
            [
                'id' => 120,
                'name' => 'Skracovačky',
                'url' => '556596383',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 121,
                'name' => 'Skracovačky s pokrčenými nohami vo vzduchu',
                'url' => '556596860',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 122,
                'name' => 'Skracovačky s vystretými nohami vo vzduchu',
                'url' => '556597264',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 123,
                'name' => 'Striedavý lakeť – koleno v ľahu (na každú stranu)',
                'url' => '556597674',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 124,
                'name' => 'Kolíska',
                'url' => '556595932',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 125,
                'name' => 'Striedavé nožnice (na každú stranu)',
                'url' => '556895147',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 126,
                'name' => 'Nožnice na jednu stranu ( na každú stranu)',
                'url' => '556895567',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],


            // 127 chyba


            [
                'id' => 128,
                'name' => 'Priťahovanie kolien k hrudníku v ľahu',
                'url' => '556896752',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 129,
                'name' => 'Dvíhanie vystretých nôh v ľahu',
                'url' => '556894697',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 130,
                'name' => 'Postupné dvíhane vystretých nôh v ľahu',
                'url' => '558012383',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 131,
                'name' => 'Kreslenie písmena O v ľahu s nohami',
                'url' => '558012958',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 132,
                'name' => 'Nožnice s nohami nad zemou',
                'url' => '558013537',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 133,
                'name' => 'Bicykel',
                'url' => '558011397',
                'body_section_id' => null,
                'body_part_id' => null,
                'type_id' => 3,
            ],
            [
                'id' => 134,
                'name' => 'Striedavé spúšťanie nôh v ľahu',
                'url' => '558018380',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 135,
                'name' => 'Priťahovanie kolien k hrudníku v sede',
                'url' => '558018895',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 136,
                'name' => 'Priťahovanie kolien k hrudníku na boku (na každú stranu)',
                'url' => '558019470',
                'body_section_id' => 3,
                'body_part_id' => 12,
                'type_id' => 1,
            ],


            // 137 chyba


            [
                'id' => 138,
                'name' => 'Držanie nôh vo vzduchu',
                'url' => '558017911',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
            ],
            [
                'id' => 139,
                'name' => 'L – sit v sede',
                'url' => '558025736',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
            ],
            [
                'id' => 140,
                'name' => 'Kmity rukami v ľahu s nohami nad zemou',
                'url' => '558025973',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
            ],
            [
                'id' => 141,
                'name' => 'Plank na kolenách',
                'url' => '558026538',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
            ],


            // 142 chyba


            [
                'id' => 143,
                'name' => 'Vzpor',
                'url' => '558025128',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
            ],
            [
                'id' => 144,
                'name' => 'Chôdza dopredu a vzad na štyroch',
                'url' => '558031061',
                'body_section_id' => 3,
                'body_part_id' => 10,
                'type_id' => 4,
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
                'exercise_id' => 10,
                'difficulty_id' => 1,
            ],


            [
                'exercise_id' => 11,
                'difficulty_id' => 1,
            ],


            [
                'exercise_id' => 12,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 12,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 12,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 13,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 13,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 13,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 14,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 14,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 15,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 15,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 15,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 16,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 16,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 17,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 17,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 17,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 18,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 18,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 18,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 19,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 19,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 19,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 20,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 20,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 21,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 21,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 21,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 22,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 22,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 23,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 23,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 24,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 24,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 25,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 25,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 25,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 26,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 26,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 26,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 27,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 27,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 27,
                'difficulty_id' => 3,
            ],


            // 28 a 29 chyba


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
                'exercise_id' => 31,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 31,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 31,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 32,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 32,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 33,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 33,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 33,
                'difficulty_id' => 3,
            ],


            // 34 chyba


            [
                'exercise_id' => 35,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 35,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 35,
                'difficulty_id' => 3,
            ],


            // 36 chyba


            [
                'exercise_id' => 37,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 37,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 37,
                'difficulty_id' => 3,
            ],


            // 38 chyba


            [
                'exercise_id' => 39,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 39,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 39,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 40,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 40,
                'difficulty_id' => 3,
            ],


            // 41 chyba


            [
                'exercise_id' => 42,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 42,
                'difficulty_id' => 3,
            ],


            // 43 chyba


            [
                'exercise_id' => 44,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 44,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 45,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 45,
                'difficulty_id' => 3,
            ],


            // 46 a 47 chyba


            [
                'exercise_id' => 48,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 48,
                'difficulty_id' => 3,
            ],


            // 49 - 51 chyba


            [
                'exercise_id' => 52,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 52,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 52,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 53,
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
                'exercise_id' => 55,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 55,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 56,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 56,
                'difficulty_id' => 3,
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
                'exercise_id' => 59,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 59,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 60,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 60,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 60,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 61,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 61,
                'difficulty_id' => 2,
            ],


            // 62 chyba


            [
                'exercise_id' => 63,
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
                'exercise_id' => 66,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 66,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 67,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 67,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 68,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 68,
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
                'exercise_id' => 71,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 71,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 71,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 72,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 72,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 73,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 74,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 74,
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


            // 76 chyba


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
                'exercise_id' => 78,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 78,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 78,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 79,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 79,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 79,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 80,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 80,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 81,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 81,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 82,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 82,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 82,
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


            [
                'exercise_id' => 84,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 84,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 84,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 85,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 85,
                'difficulty_id' => 3,
            ],


            // 86 chyba


            [
                'exercise_id' => 87,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 87,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 88,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 88,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 89,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 89,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 90,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 90,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 90,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 91,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 91,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 91,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 92,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 92,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 93,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 93,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 93,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 94,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 94,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 95,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 95,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 95,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 96,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 96,
                'difficulty_id' => 2,
            ],


            [
                'exercise_id' => 97,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 97,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 982,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 982,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 98,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 98,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 100,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 100,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 100,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 101,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 101,
                'difficulty_id' => 2,
            ],


            [
                'exercise_id' => 1012,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 1012,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 102,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 102,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 102,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 103,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 103,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 104,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 104,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 105,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 105,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 106,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 106,
                'difficulty_id' => 3,
            ],


//            [
//                'exercise_id' => 107,
//                'difficulty_id' => 1,
//            ],
//            [
//                'exercise_id' => 107,
//                'difficulty_id' => 2,
//            ],
            //este nieje link este nieje definovane


            [
                'exercise_id' => 108,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 108,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 109,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 109,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 109,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 110,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 110,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 110,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 111,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 111,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 111,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 112,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 112,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 112,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 113,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 113,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 113,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 114,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 114,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 114,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 115,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 115,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 115,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 116,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 116,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 116,
                'difficulty_id' => 3,
            ],


            //117 a 118 chyba

            [
                'exercise_id' => 119,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 119,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 119,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 120,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 120,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 120,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 121,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 121,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 122,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 123,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 123,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 124,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 124,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 125,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 125,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 126,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 126,
                'difficulty_id' => 3,
            ],


            // 127 chyba


            [
                'exercise_id' => 128,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 128,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 128,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 129,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 129,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 129,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 130,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 130,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 130,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 131,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 131,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 131,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 132,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 132,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 132,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 133,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 133,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 133,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 134,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 134,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 134,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 135,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 135,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 135,
                'difficulty_id' => 3,
            ],


            [
                'exercise_id' => 136,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 136,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 136,
                'difficulty_id' => 3,
            ],


            // 137 chyba


            [
                'exercise_id' => 138,
                'difficulty_id' => 1,
            ],


            [
                'exercise_id' => 139,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 139,
                'difficulty_id' => 2,
            ],


            [
                'exercise_id' => 140,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 140,
                'difficulty_id' => 2,
            ],


            [
                'exercise_id' => 141,
                'difficulty_id' => 1,
            ],


            // 142 chyba


            [
                'exercise_id' => 143,
                'difficulty_id' => 1,
            ],
            [
                'exercise_id' => 143,
                'difficulty_id' => 2,
            ],


            [
                'exercise_id' => 144,
                'difficulty_id' => 2,
            ],
            [
                'exercise_id' => 144,
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
                'exercise_id' => 10,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 11,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 12,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 13,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 14,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 15,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 16,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 17,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 18,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 19,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 20,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 21,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 22,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 23,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 24,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 25,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 26,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 10,
                'area_id' => 2,
            ],

            // 28 a 29 chyba


            [
                'exercise_id' => 30,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 31,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 32,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 33,
                'area_id' => 2,
            ],

            // 34 chyba

            [
                'exercise_id' => 35,
                'area_id' => 2,
            ],

            // 36 chyba


            [
                'exercise_id' => 37,
                'area_id' => 2,
            ],

            // 38 chyba


            [
                'exercise_id' => 39,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 40,
                'area_id' => 2,
            ],

            // 41 chyba


            [
                'exercise_id' => 42,
                'area_id' => 2,
            ],

            // 43 chyba


            [
                'exercise_id' => 44,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 45,
                'area_id' => 2,
            ],

            // 46 a 47 chyba

            [
                'exercise_id' => 48,
                'area_id' => 2,
            ],

            // 49 - 51 chyba

            [
                'exercise_id' => 52,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 53,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 54,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 55,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 56,
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
                'exercise_id' => 59,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 60,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 61,
                'area_id' => 2,
            ],

            //62 chyba


            [
                'exercise_id' => 63,
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
                'exercise_id' => 66,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 67,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 68,
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
                'exercise_id' => 71,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 72,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 73,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 74,
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


            // 76 chyba


            [
                'exercise_id' => 77,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 77,
                'area_id' => 2,
            ],


            [
                'exercise_id' => 78,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 78,
                'area_id' => 2,
            ],


            [
                'exercise_id' => 79,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 79,
                'area_id' => 2,
            ],


            [
                'exercise_id' => 80,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 81,
                'area_id' => 2,
            ],


            [
                'exercise_id' => 82,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 82,
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


            [
                'exercise_id' => 84,
                'area_id' => 1,
            ],
            [
                'exercise_id' => 84,
                'area_id' => 2,
            ],


            [
                'exercise_id' => 85,
                'area_id' => 2,
            ],

            // 86 chyba


            [
                'exercise_id' => 87,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 88,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 89,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 90,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 91,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 92,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 93,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 94,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 95,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 96,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 97,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 982,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 98,
                'area_id' => 2,
            ],

            // 99 chyba


            [
                'exercise_id' => 100,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 101,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 1012,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 102,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 103,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 104,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 105,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 106,
                'area_id' => 2,
            ],
//            [
//                'exercise_id' => 107,
//                'area_id' => 2,
//            ],
            // este nieje definova url v exercises

            [
                'exercise_id' => 108,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 109,
                'area_id' => 3,
            ],
            [
                'exercise_id' => 110,
                'area_id' => 3,
            ],
            [
                'exercise_id' => 111,
                'area_id' => 3,
            ],
            [
                'exercise_id' => 112,
                'area_id' => 3,
            ],
            [
                'exercise_id' => 113,
                'area_id' => 3,
            ],
            [
                'exercise_id' => 114,
                'area_id' => 3,
            ],
            [
                'exercise_id' => 115,
                'area_id' => 3,
            ],
            [
                'exercise_id' => 116,
                'area_id' => 3,
            ],

            // 117 a 118 chyba


            [
                'exercise_id' => 119,
                'area_id' => 3,
            ],
            [
                'exercise_id' => 120,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 121,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 122,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 123,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 124,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 125,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 126,
                'area_id' => 2,
            ],

            // 127 chyba


            [
                'exercise_id' => 128,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 129,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 130,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 131,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 132,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 133,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 134,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 135,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 136,
                'area_id' => 2,
            ],

            // 137 chyba


            [
                'exercise_id' => 138,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 139,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 140,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 141,
                'area_id' => 2,
            ],

            // 142 chyba

            [
                'exercise_id' => 143,
                'area_id' => 2,
            ],
            [
                'exercise_id' => 144,
                'area_id' => 2,
            ],


        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('exercises', function(Blueprint $table) {
            //
        });
    }
}
