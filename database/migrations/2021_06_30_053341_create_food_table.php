<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->json("ingredients");
            $table->json("recipe");
            $table->integer("kcal");
            $table->integer("proteins");
            $table->integer("carbohydrates");
            $table->integer("fats");

            $table->foreignId("food_type_id")->constrained("food_types")->cascadeOnDelete();
        });

        DB::table('food')->insert([
            [
                'name' => 'Ovseno-jogurtová kaša s jahodami',
                'ingredients' => '[
                    {
                        "name": "ovsené vločky",
                        "amount": 15
                    },
                    {
                        "name": "orechy vlašské",
                        "amount": 4
                    },
                    {
                        "name": "jogurt biely bez smotany",
                        "amount": 60
                    },
                    {
                        "name": "jahody mrazené",
                        "amount": 19
                    },
                    {
                        "name": "med",
                        "amount": 2
                    }
                ]',
                'recipe' => '[
                    "1. Do misky nasypeme vločky, orechy a jahody.",
                    "2. Zalejeme jogurtom, pridaj med a zamiešajte."
                ]',
                'kcal' => 137,
                'proteins' => 5,
                'carbohydrates' => 18,
                'fats' => 5,
                'food_type_id' => 1
            ],
            [
                'name' => 'Banánové lievance',
                'ingredients' => '[
                    {
                        "name": "slepačie vajce",
                        "amount": 21
                    },
                    {
                        "name": "banán",
                        "amount": 69
                    },
                    {
                        "name": "tvaroh jemný hrudkový",
                        "amount": 10
                    },
                    {
                        "name": "olivový olej",
                        "amount": null
                    }
                ]',
                'recipe' => '[
                    "1. Do misky pridáme banán, vajíčka a rozmixujeme ponorným mixérom.",
                    "2. Rozohrejeme panvicu a pridáme iba toľko olivového oleja, aby sa lievance nepripaľovali.",
                    "3. Na panvicu naberačkou nalejeme zmes a opečieme z oboch strán, kým sa zmes neminie.",
                    "4. Na vrch lievancov si dáme tvaroh."
                ]',
                'kcal' => 120,
                'proteins' => 5,
                'carbohydrates' => 16,
                'fats' => 5,
                'food_type_id' => 1
            ],
            [
                'name' => 'Obložený chlebík',
                'ingredients' => '[
                    {
                        "name": "chlieb celozrný ražný",
                        "amount": 34
                    },
                    {
                        "name": "bravčová šunka",
                        "amount": 19
                    },
                    {
                        "name": "maslo",
                        "amount": 6
                    },
                    {
                        "name": "paprika žltá",
                        "amount": 41
                    }
                ]',
                'recipe' => '[
                    "1. Maslo rozotrieme rovnomerne na chlieb.",
                    "2. Na vrch pridáme plátky šunky.",
                    "3. Papriku nakrájame a pridáme na vrch chlebu alebo konzumujeme samostatne."
                ]',
                'kcal' => 171,
                'proteins' => 7,
                'carbohydrates' => 20,
                'fats' => 7,
                'food_type_id' => 1
            ],
            [
                'name' => 'Ovocná omeleta',
                'ingredients' => '[
                    {
                        "name": "slepačie vajce",
                        "amount": 36
                    },
                    {
                        "name": "pohánková múka",
                        "amount": 11
                    },
                    {
                        "name": "čučoriedky",
                        "amount": 42
                    },
                    {
                        "name": "mlieko polotučné 1,5%",
                        "amount": 11
                    }
                ]',
                'recipe' => '[
                    "1. Do misky pridáme vajcia, múku a mlieko.",
                    "2. Ingrediencie rozmixujeme.",
                    "3. Panvicu zľahka pokvapkáme olejom, vylejeme zmes a na rozhoriatej panvici pečieme z oboch strán približne 3 minúty."
                ]',
                'kcal' => 129,
                'proteins' => 6,
                'carbohydrates' => 15,
                'fats' => 5,
                'food_type_id' => 1
            ],
            [
                'name' => 'Praženica',
                'ingredients' => '[
                    {
                        "name": "slepačie vajce",
                        "amount": 42
                    },
                    {
                        "name": "chlieb",
                        "amount": 39
                    },
                    {
                        "name": "paradajky",
                        "amount": 19
                    },
                    {
                        "name": "olivový olej",
                        "amount": null
                    },
                    {
                        "name": "cibuľa",
                        "amount": null
                    }
                ]',
                'recipe' => '[
                    "1. Na panvici s troškou oleja orestujeme najemno nakrájanú cibuľku.",
                    "2. Pridáme vajíčka a miešame, kým nebudú hotové.",
                    "3. Hotovú praženicu dochutíme korením, soľou alebo bylinami podľa toho, ako ju máš rada."
                ]',
                'kcal' => 150,
                'proteins' => 8,
                'carbohydrates' => 16,
                'fats' => 6,
                'food_type_id' => 1
            ],






            [
                'name' => 'Tuniakové cestoviny',
                'ingredients' => '[
                    {
                        "name": "ľubovoľné cestoviny (neuvarené)",
                        "amount": 42
                    },
                    {
                        "name": "tuniak vo vlastnej šťave napr. Giana",
                        "amount": 36
                    },
                    {
                        "name": "slnečnicové semená",
                        "amount": 3
                    },
                    {
                        "name": "jogurt biely bez smotany",
                        "amount": 8
                    },
                    {
                        "name": "paradajky",
                        "amount": 11
                    }
                ]',
                'recipe' => '[
                    "1. Cestoviny uvaríme ako je uvedené na obale.",
                    "2. Do cestovín pridáme tuniaka zbaveného šťavy, nakrájané paradajky, jogurt a slnečnicové semienka.",
                    "3. Dochutíme soľou a zamiešame."
                ]',
                'kcal' => 208,
                'proteins' => 13,
                'carbohydrates' => 30,
                'fats' => 4,
                'food_type_id' => 2
            ],
            [
                'name' => 'Kuracie cestoviny',
                'ingredients' => '[
                    {
                        "name": "ľubovoľné cetoviny (neuvarené)",
                        "amount": 30
                    },
                    {
                        "name": "kuracie prsia bez kostí (surové)",
                        "amount": 29
                    },
                    {
                        "name": "biely jogurt bez smotany",
                        "amount": 41
                    },
                    {
                        "name": "olivový olej",
                        "amount": null
                    }
                ]',
                'recipe' => '[
                    "1. Cestoviny uvaríme ako je uvedené na obale.",
                    "2. Mäso nakrájame na kocky, korením ochutíme a opečieme na panvici s olejom (max. 10g oleja).",
                    "3. Cestoviny premiešame s mäsom a jogurtom."
                ]',
                'kcal' => 180,
                'proteins' => 14,
                'carbohydrates' => 23,
                'fats' => 6,
                'food_type_id' => 2
            ],
            [
                'name' => 'Ryža s brokolicou, šunkou a orechami',
                'ingredients' => '[
                    {
                        "name": "ryža (varená)",
                        "amount": 40
                    },
                    {
                        "name": "brokolica",
                        "amount": 26
                    },
                    {
                        "name": "kuracia šunka",
                        "amount": 16
                    },
                    {
                        "name": "orechy kešu",
                        "amount": 2
                    },
                    {
                        "name": "vajce slepačie",
                        "amount": 16
                    }
                ]',
                'recipe' => '[
                    "1. Ryžu uvaríme vo vode.",
                    "2. Uvarenú ryžu presunieme na panvicu (najlepšie použiť wok), pridáme nakrájanú brokolicu a šunku.",
                    "3. Pridáme trošku vody aby sa ryža nepripálila.",
                    "4. Podľa chuti pridáme korenie, orechy, surové vajce a miešame, kým sa vajce neuvarí."
                ]',
                'kcal' => 85,
                'proteins' => 7,
                'carbohydrates' => 12,
                'fats' => 1,
                'food_type_id' => 2
            ],
            [
                'name' => 'Pšeničná tortilla s mäsom',
                'ingredients' => '[
                    {
                        "name": "tortilla pšeničná",
                        "amount": null
                    },
                    {
                        "name": "morčacie prsia bez kostí (surové)",
                        "amount": 43
                    },
                    {
                        "name": "bravčová masť (alebo olej)",
                        "amount": null
                    },
                    {
                        "name": "uhorky",
                        "amount": 23
                    },
                    {
                        "name": "ľadový šalát",
                        "amount": 34
                    },
                    {
                        "name": "jogurt",
                        "amount": null
                    }
                ]',
                'recipe' => '[
                    "1. Mäso nakrájme na kúsky, okoreníme podľa chuti a opečieme na troche masti (max. 10g masti).",
                    "2. Umytú zeleninu pokrájame.",
                    "3. Pripravíme si domáci jogurtový dressing (napr. jogurt 30g, 1ČL medu, čierne korenie, soľ).",
                    "4. Tortillu naplníme mäsom, zeleninou a polejeme dressingom."
                ]',
                'kcal' => 169,
                'proteins' => 14,
                'carbohydrates' => 17,
                'fats' => 5,
                'food_type_id' => 2
            ],
            [
                'name' => 'Kuracie prsia s pečenými zemiakmi a zeleninou',
                'ingredients' => '[
                    {
                        "name": "kuracie prsia bez kostí (surové)",
                        "amount": 25
                    },
                    {
                        "name": "zemiaky (surové)",
                        "amount": 33
                    },
                    {
                        "name": "olivový olej",
                        "amount": null
                    },
                    {
                        "name": "paradajky",
                        "amount": 8
                    },
                    {
                        "name": "červená paprika",
                        "amount": 8
                    },
                    {
                        "name": "uhorky",
                        "amount": 8
                    },
                    {
                        "name": "ľadový šalát",
                        "amount": 18
                    }
                ]',
                'recipe' => '[
                    "1. Mäso narežeme na menšie kúsky a okoreníme podľa chuti.",
                    "2. Očistíme zemiaky, nakrájame na plátky a osolíme.",
                    "3. Mäso so zemiakmi presunieme na plech na pečenie a pridáme trošku olivového oleja.",
                    "4. V trúbe pečieme 60minút na 180 stupňov.",
                    "5. Zeleninu si nakrájame, vložíme do misky a zalejeme olivovým olejom (cca 8g)."
                ]',
                'kcal' => 96,
                'proteins' => 7,
                'carbohydrates' => 8,
                'fats' => 4,
                'food_type_id' => 2
            ],





            [
                'name' => 'Špenátové smoothie s čučoriedkami a banánom',
                'ingredients' => '[
                    {
                        "name": "špenát listový",
                        "amount": 18
                    },
                    {
                        "name": "banány",
                        "amount": 28
                    },
                    {
                        "name": "čučoriedky",
                        "amount": 39
                    },
                    {
                        "name": "olivový olej",
                        "amount": 2
                    },
                    {
                        "name": "ľubovoľný whey proteín",
                        "amount": 13
                    }
                ]',
                'recipe' => '[
                    "1. Ingrediencie vložíme do mixéra a pridáme trochu vody."
                ]',
                'kcal' => 115,
                'proteins' => 11,
                'carbohydrates' => 11,
                'fats' => 3,
                'food_type_id' => 3
            ],
            [
                'name' => 'Jogurt s orechami a banánom',
                'ingredients' => '[
                    {
                        "name": "banány",
                        "amount": 43
                    },
                    {
                        "name": "biely jogurt bez smotany",
                        "amount": 47
                    },
                    {
                        "name": "ľubovoľné orechy",
                        "amount": 10
                    }
                ]',
                'recipe' => '[
                    "1. Banány nakrájame a v miske zmiešame spolu s jogurtom.",
                    "2. Vrch posypeme orechami."
                ]',
                'kcal' => 140,
                'proteins' => 4,
                'carbohydrates' => 13,
                'fats' => 8,
                'food_type_id' => 3
            ],
            [
                'name' => 'Grilovaná zelenina so syrom',
                'ingredients' => '[
                    {
                        "name": "mrkva",
                        "amount": 23
                    },
                    {
                        "name": "cukina",
                        "amount": 34
                    },
                    {
                        "name": "paprika žltá",
                        "amount": 34
                    },
                    {
                        "name": "syr eidam 30%",
                        "amount": 9
                    }
                ]',
                'recipe' => '[
                    "1. Pokrájame zeleninu a vložíme ju do misky.",
                    "2. Pridáme trošku olivového oleja, posolíme, pridáme korenie podľa chuti a premišame.",
                    "3. Zeleninu preložíme na plech do rúry na ktorom je papier na pečenie.",
                    "4. Pečieme 40 minút na 200 stupňov.",
                    "5. Po vybratí zeleniny z rúry ju posypeme nakrájaným syrom."
                ]',
                'kcal' => 77,
                'proteins' => 4,
                'carbohydrates' => 4,
                'fats' => 5,
                'food_type_id' => 3
            ],
            [
                'name' => 'Jahodovo-kakaové smoothie',
                'ingredients' => '[
                    {
                        "name": "jahody záhradné",
                        "amount": 24
                    },
                    {
                        "name": "kakaový prášok",
                        "amount": 2
                    },
                    {
                        "name": "mlieko polotučné 1,5%",
                        "amount": 70
                    },
                    {
                        "name": "whey protein",
                        "amount": 4
                    }
                ]',
                'recipe' => '[
                    "1. Ingrediencie vložíme do mixéra a rozmixujeme."
                ]',
                'kcal' => 62,
                'proteins' => 6,
                'carbohydrates' => 5,
                'fats' => 2,
                'food_type_id' => 3
            ],
            [
                'name' => 'Kukurica s parmezánom a maslom',
                'ingredients' => '[
                    {
                        "name": "kukurica napr. Bonduelle",
                        "amount": 81
                    },
                    {
                        "name": "parmezán",
                        "amount": 13
                    },
                    {
                        "name": "maslo",
                        "amount": 6
                    }
                ]',
                'recipe' => '[
                    "1. Maslo roztopíme na sporáku alebo v mikrovlnke (opatrne, skontrolovať po 10s).",
                    "2. Do misky vložíme kukuricu, polejeme roztopeným maslom a posypeme nastrúhaným parmezánom."
                ]',
                'kcal' => 145,
                'proteins' => 7,
                'carbohydrates' => 9,
                'fats' => 9,
                'food_type_id' => 3
            ],



            [
                'name' => 'Rukolový šalát s mäsom',
                'ingredients' => '[
                    {
                        "name": "rukola",
                        "amount": 11
                    },
                    {
                        "name": "kuracie prsia bez kostí (surové)",
                        "amount": 31
                    },
                    {
                        "name": "olivový olej",
                        "amount": 4
                    },
                    {
                        "name": "chlieb zemiakový",
                        "amount": 20
                    },
                    {
                        "name": "paradajky",
                        "amount": 34
                    }
                ]',
                'recipe' => '[
                    "1. Mäso nakrájame na kúsky, okoreníme podľa chuti a pečieme na panvici s troškou oleja.",
                    "2. Po opečení mäso pridáme do misky k rukole a paradajkám.",
                    "3. Polejme olivovým olejom a konzumujte spolu s pečivom."
                ]',
                'kcal' => 168,
                'proteins' => 11,
                'carbohydrates' => 13,
                'fats' => 8,
                'food_type_id' => 4
            ],
            [
                'name' => 'Tvaroh s medom a kešu',
                'ingredients' => '[
                    {
                        "name": "tvaroh roztieratelný napr. Pilos",
                        "amount": 80
                    },
                    {
                        "name": "med včelí",
                        "amount": 8
                    },
                    {
                        "name": "orechy kešu",
                        "amount": 12
                    }
                ]',
                'recipe' => '[
                    "1. Tvaroh zmiešame s medom a pridáme orechy."
                ]',
                'kcal' => 195,
                'proteins' => 11,
                'carbohydrates' => 13,
                'fats' => 11,
                'food_type_id' => 4
            ],
            [
                'name' => 'Tuniakový šalát s pestom',
                'ingredients' => '[
                    {
                        "name": "ľadový šalát",
                        "amount": 14
                    },
                    {
                        "name": "mozzarella",
                        "amount": 21
                    },
                    {
                        "name": "tuniak vo vlastnej šťave napr. Giana",
                        "amount": 34
                    },
                    {
                        "name": "pesto",
                        "amount": 8
                    },
                    {
                        "name": "chlieb celozrný ražný",
                        "amount": 23
                    }
                ]',
                'recipe' => '[
                    "1. Nakrájaný šalát a mozzarellu vložíme do misky.",
                    "2. Pridáme tuniaka (zbavného šťavy), pesto a premiešajte.",
                    "3. Konzumujeme s pečivom."
                ]',
                'kcal' => 156,
                'proteins' => 11,
                'carbohydrates' => 10,
                'fats' => 8,
                'food_type_id' => 4
            ],
            [
                'name' => 'Losos s pučenými zemiakmi',
                'ingredients' => '[
                    {
                        "name": "losos obyčajný (surový)",
                        "amount": 48
                    },
                    {
                        "name": "zemiaky skoré (surové)",
                        "amount": 48
                    },
                    {
                        "name": "maslo",
                        "amount": 4
                    },
                    {
                        "name": "olivový olej",
                        "amount": null
                    },
                    {
                        "name": "citrón",
                        "amount": null
                    },
                    {
                        "name": "cesnak",
                        "amount": null
                    }
                ]',
                'recipe' => '[
                    "1. Zemiaky nakrájané na kocky uvaríme v osolenej vode.",
                    "2. Po uvarení vylejeme vodu, pridáme maslo a zemiaky popučíme.",
                    "3. Lososa umyjeme, osušíme, okoreníme podľa chuti, pokvapkáme citrónom a pridáme trošku olivového oleja (5g).",
                    "4. Pečieme v rúre približne 30 min. na 180 stupňov."
                ]',
                'kcal' => 188,
                'proteins' => 11,
                'carbohydrates' => 9,
                'fats' => 12,
                'food_type_id' => 4
            ],
            [
                'name' => 'Bravčová panenka so zemiakmi',
                'ingredients' => '[
                    {
                        "name": "bravčová panenka (uvarená)",
                        "amount": 36
                    },
                    {
                        "name": "olivový olej",
                        "amount": 2
                    },
                    {
                        "name": "zemiaky skoré (surové)",
                        "amount": 36
                    },
                    {
                        "name": "maslo",
                        "amount": 4
                    },
                    {
                        "name": "paradajky",
                        "amount": 22
                    }
                ]',
                'recipe' => '[
                    "1. Zemiaky nakrájané na kocky uvaríme v osolenej vode.",
                    "2. Po uvarení vylejeme vodu, pridáme maslo a zamiešame.",
                    "3. Bravčovú panenku okoreníme podľa chuti.",
                    "4. Na panvici rozohrejte olej a sprudka orestujeme z každej strany, kým sa nevytvorí zlatohnedé sfarbenie.",
                    "5. Presunieme panenku na pekáč do rúry a pečieme 12-17minút (podľa toho, ako ju máš rada) na 190 stupňov."
                ]',
                'kcal' => 135,
                'proteins' => 9,
                'carbohydrates' => 9,
                'fats' => 7,
                'food_type_id' => 4
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
        Schema::dropIfExists('food');
    }
}
