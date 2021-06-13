<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExerciseController extends Controller
{


    public function generateTraining(Request $request)
    {

        // validate data if they are OK
        $data = $request->validate([
            'body-section' => ['string', 'in:upper-body,lower-body,whole-body'],
            'difficulty' => ['string', 'in:easy-training,medium-training,hard-training'],
            'training-time' => ['string', 'in:short-time,long-time']
        ]);


        $fullTraining = $this->generateData($data);

//        dd($fullTraining);

        return view('current-training',
            [
                "warmUp" => $fullTraining['warmUp'],
                "training" => $fullTraining['training'],
                "stretching" => $fullTraining['stretching'],
                "pauses" => $fullTraining['pauses'],
                "fullTime" => $fullTraining['fullTime']
            ]
        );
    }


    public function generateQuery($difficulty, $area)
    {
        $query = DB::table('exercises')
            ->join('difficulty_exercise', 'exercises.id', '=', 'difficulty_exercise.exercise_id')
            ->join('difficulties', 'difficulty_exercise.difficulty_id', '=', 'difficulties.id')
            ->where('difficulties.name', '=', $difficulty)
            ->join('area_exercise', 'exercises.id', '=', 'area_exercise.exercise_id')
            ->join('areas', 'area_exercise.area_id', '=', 'areas.id')
            ->where('areas.name', '=', $area)
            ->inRandomOrder()
            ->select('exercises.*');

        if ($area != "Strečing") {
            $query
                ->join('types', 'types.id', '=', 'exercises.type_id')
                ->addSelect('types.name as typeName', 'types.time_easy', 'types.time_medium', 'types.time_hard');
        }

        return $query;
    }


    public function generateData($data)
    {
        $fullWarmUp = [];
        $fullTraining = [];
        $fullStretching = [];

        $exerciseDivide = [

            'upper-body' => [

                'easy-training' => [
                    'warm-up' => [
                        'Horný chrbát',
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                    ],
                    'training' => [
                        'short-time' => [
                            ["Horný chrbát", "Priame brucho", "Priame brucho", "Šikmé brucho"],
                            ["Horný chrbát", "Horný chrbát", "Priame brucho", ['Kardio', 'Brucho']],

                            'fullTime' => 16
                        ],
                        'long-time' => [
                            ["Horný chrbát", "Celý vrch", "Priame brucho", ['Kardio', 'Brucho']],
                            ["Horný chrbát", "Priame brucho", "Priame brucho", "Šikmé brucho"],
                            ["Horný chrbát", "Horný chrbát", "Priame brucho", ['Kardio', 'Brucho']],

                            'fullTime' => 20
                        ]
                    ],
                    'stretching' => [
                        'Krk', 'Ramená', "Spodný chrbát", "Spodný chrbát"
                    ],
                    'pauses' => [
                        'betweenExercises' => 60,
                        'betweenRounds' => 120
                    ]
                ],

                'medium-training' => [
                    'warm-up' => [
                        'Horný chrbát',
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"]
                    ],
                    'training' => [
                        'short-time' => [
                            ["Celý vrch", "Horný chrbát", "Horný chrbát", "Priame brucho", "Priame brucho"],
                            ["Celý vrch", "Horný chrbát", "Priame brucho", "Priame brucho", "Šikmé brucho"],

                            'fullTime' => 18
                        ],
                        'medium-time' => [
                            ["Celý vrch", "Horný chrbát", "Priame brucho", ['Kardio', 'Brucho'], "Šikmé brucho"],
                            ["Celý vrch", "Horný chrbát", "Horný chrbát", "Priame brucho", "Priame brucho"],
                            ["Celý vrch", "Horný chrbát", "Priame brucho", "Priame brucho", "Šikmé brucho"],

                            'fullTime' => 25
                        ],
                        'long-time' => [
                            ["Celý vrch", "Horný chrbát", "Horný chrbát", "Priame brucho", "Priame brucho"],
                            ["Horný chrbát", "Celý vrch", ['Kardio', 'Brucho'], ['Kardio', 'Brucho']],
                            ["Celý vrch", "Horný chrbát", ['Kardio', 'Brucho'], "Priame brucho", "Šikmé brucho"],
                            ["Horný chrbát", "Priame brucho", "Šikmé brucho", "Šikmé brucho"],

                            'fullTime' => 30
                        ]
                    ],
                    'stretching' => [
                        'Krk', 'Ramená', "Spodný chrbát", "Spodný chrbát"
                    ],
                    'pauses' => [
                        'betweenExercises' => 45,
                        'betweenRounds' => 90
                    ]
                ],

                'hard-training' => [
                    'warm-up' => [
                        'Horný chrbát',
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"]
                    ],
                    'training' => [
                        'short-time' => [
                            ["Celý vrch", "Horný chrbát", "Horný chrbát", "Priame brucho", "Priame brucho"],
                            ["Celý vrch", "Horný chrbát", "Priame brucho", "Priame brucho", "Šikmé brucho"],

                            'fullTime' => 16
                        ],
                        'medium-time' => [
                            ["Celý vrch", "Horný chrbát", "Priame brucho", ['Kardio', 'Brucho'], "Šikmé brucho"],
                            ["Celý vrch", "Horný chrbát", "Horný chrbát", "Priame brucho", "Priame brucho"],
                            ["Celý vrch", "Horný chrbát", "Priame brucho", "Priame brucho", "Šikmé brucho"],

                            'fullTime' => 22
                        ],
                        'long-time' => [
                            ["Celý vrch", "Horný chrbát", "Horný chrbát", "Priame brucho", "Priame brucho"],
                            ["Horný chrbát", "Celý vrch", "Priame brucho", ['Kardio', 'Brucho'], ['Kardio', 'Brucho']],
                            ["Celý vrch", "Horný chrbát", ['Kardio', 'Brucho'], "Priame brucho", "Šikmé brucho"],
                            ["Horný chrbát", "Celý vrch", "Priame brucho", "Šikmé brucho", "Šikmé brucho"],

                            'fullTime' => 28
                        ]
                    ],
                    'stretching' => [
                        'Krk', 'Ramená', "Spodný chrbát", "Spodný chrbát"
                    ],
                    'pauses' => [
                        'betweenExercises' => 30,
                        'betweenRounds' => 60
                    ]
                ],

            ],

            'lower-body' => [
                'easy-training' => [
                    'warm-up' => [
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"]
                    ],
                    'training' => [
                        'short-time' => [
                            ['Celé nohy', "Zadok", 'Celé nohy', 'Priame brucho'],
                            ['Celé nohy', "Zadok", 'Celé nohy', 'Priame brucho'],

                            'fullTime' => 16
                        ],
                        'long-time' => [
                            ['Celé nohy', "Zadok", 'Zadok', 'Priame brucho'],
                            ['Celé nohy', "Zadok", 'Celé nohy', 'Priame brucho'],
                            ['Celé nohy', "Zadok", 'Celé nohy', 'Priame brucho'],

                            'fullTime' => 20
                        ]
                    ],
                    'stretching' => [
                        'Spodný chrbát', 'Spodný chrbát', 'Zadné stehná', 'Zadné stehná'
                    ],
                    'pauses' => [
                        'betweenExercises' => 60,
                        'betweenRounds' => 120
                    ]
                ],

                'medium-training' => [
                    'warm-up' => [
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"]
                    ],
                    'training' => [
                        'short-time' => [
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', 'Celé nohy', 'Celé nohy', "Zadok", "Šikmé brucho"],

                            'fullTime' => 18
                        ],
                        'medium-time' => [
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", "Šikmé brucho"],

                            'fullTime' => 25
                        ],
                        'long-time' => [
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', "Zadok", ["Kardio", "Nohy"], ["Kardio", "Brucho"]],
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', "Zadok", ["Kardio", "Nohy"], ["Kardio", "Brucho"]],

                            'fullTime' => 30
                        ]
                    ],
                    'stretching' => [
                        'Spodný chrbát', 'Spodný chrbát', 'Zadné stehná', 'Zadné stehná'
                    ],
                    'pauses' => [
                        'betweenExercises' => 45,
                        'betweenRounds' => 90
                    ]
                ],

                'hard-training' => [
                    'warm-up' => [
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"]
                    ],
                    'training' => [
                        'short-time' => [
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', 'Celé nohy', 'Celé nohy', "Zadok", "Šikmé brucho"],

                            'fullTime' => 16
                        ],
                        'medium-time' => [
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", "Šikmé brucho"],

                            'fullTime' => 22
                        ],
                        'long-time' => [
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', 'Celé nohy', "Zadok", ["Kardio", "Nohy"], ["Kardio", "Brucho"]],
                            ['Celé nohy', 'Celé nohy', "Zadok", "Zadok", 'Priame brucho'],
                            ['Celé nohy', 'Celé nohy', "Zadok", ["Kardio", "Nohy"], ["Kardio", "Brucho"]],

                            'fullTime' => 28
                        ]
                    ],
                    'stretching' => [
                        'Spodný chrbát', 'Spodný chrbát', 'Zadné stehná', 'Zadné stehná'
                    ],
                    'pauses' => [
                        'betweenExercises' => 30,
                        'betweenRounds' => 60
                    ]
                ],
            ],


            'whole-body' => [
                'easy-training' => [
                    'warm-up' => [
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"]
                    ],
                    'training' => [
                        'short-time' => [
                            ['Celé nohy', ["Kardio", "Nohy"], 'Horný chrbát', 'Horný chrbát', 'Priame brucho'],
                            ['Celé nohy', "Zadok", "Horný chrbát", "Šikmé brucho", ["Kardio", "Brucho"]],

                            'fullTime' => 20
                        ],
                        'long-time' => [
                            ['Celé nohy', 'Celé nohy', 'Horný chrbát', 'Priame brucho', 'Priame brucho'],
                            ['Celé nohy', ["Kardio", "Nohy"], "Horný chrbát", "Horný chrbát", 'Priame brucho'],
                            ['Celé nohy', "Zadok", "Horný chrbát", "Šikmé brucho", ["Kardio", "Brucho"]],

                            'fullTime' => 25
                        ]
                    ],
                    'stretching' => [
                        (object)["Krk", "Ramená"], 'Spodný chrbát', 'Spodný chrbát', 'Zadné stehná'
                    ],
                    'pauses' => [
                        'betweenExercises' => 60,
                        'betweenRounds' => 120
                    ]
                ],

                'medium-training' => [
                    'warm-up' => [
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"],
                        ["Kardio", "Nohy"]
                    ],
                    'training' => [
                        'short-time' => [
                            ['Celé nohy', "Zadok", ["Kardio", "Nohy"], 'Priame brucho', "Šikmé brucho"],
                            ['Celý vrch', "Horný chrbát", "Horný chrbát", "Zadok", ["Kardio", "Brucho"]],

                            'fullTime' => 18
                        ],
                        'medium-time' => [
                            ["Horný chrbát", 'Celý vrch', 'Celý vrch', 'Celé nohy', 'Priame brucho'],
                            ['Celé nohy', "Zadok", ["Kardio", "Nohy"], 'Priame brucho', "Šikmé brucho"],
                            ['Celý vrch', "Horný chrbát", "Horný chrbát", "Zadok", ["Kardio", "Brucho"]],

                            'fullTime' => 25
                        ],
                        'long-time' => [
                            ["Horný chrbát", 'Celý vrch', 'Celé nohy', 'Celé nohy', 'Priame brucho'],
                            ['Celé nohy', "Zadok", ["Kardio", "Nohy"], 'Priame brucho', "Šikmé brucho"],
                            ["Zadok", "Zadok", ["Kardio", "Nohy"], ["Kardio", "Brucho"], "Horný chrbát"],
                            ['Celý vrch', "Horný chrbát", "Horný chrbát", "Zadok", ["Kardio", "Brucho"]],

                            'fullTime' => 32

                        ]
                    ],
                    'stretching' => [
                        (object)["Krk", "Ramená"], 'Spodný chrbát', 'Spodný chrbát', 'Zadné stehná'
                    ],
                    'pauses' => [
                        'betweenExercises' => 45,
                        'betweenRounds' => 90
                    ]
                ],

                'hard-training' => [
                    'warm-up' => [

                    ],
                    'training' => [
                        'short-time' => [

                        ],
                        'long-time' => [

                        ]
                    ],
                    'stretching' => [

                    ],
                    'pauses' => [
                        'betweenExercises' => 60,
                        'betweenRounds' => 120
                    ]
                ],
            ]
        ];


        $trainingExercises = $exerciseDivide[$data['body-section']][$data['difficulty']]['training'][$data['training-time']];


        $pauses = $exerciseDivide[$data['body-section']][$data['difficulty']]['pauses'];
        $fullTime = $trainingExercises['fullTime'];
        unset($trainingExercises['fullTime']);

        $fullWarmUp = $this->generateExercisesByArray($exerciseDivide[$data['body-section']][$data['difficulty']]['warm-up'], $data['difficulty'], "Rozcvička");


        for ($i = 0; $i < count($trainingExercises); $i++) {
            array_push($fullTraining, $this->generateExercisesByArray($trainingExercises[$i], $data['difficulty'], 'Tréning'));
        }

        $fullStretching = $this->generateExercisesByArray($exerciseDivide[$data['body-section']][$data['difficulty']]['stretching'], $data['difficulty'], 'Strečing');

        return array('warmUp' => $fullWarmUp, 'training' => $fullTraining, 'stretching' => $fullStretching, 'pauses' => $pauses, 'fullTime' => $fullTime);


    }

    public function randomRepsOrTime($exercise, $difficulty = "easy-training", $isStretchinOrWarmUp = false)
    {

        $difficulty = substr($difficulty, 0, strpos($difficulty, "-"));
        if ($isStretchinOrWarmUp) {
            $exercise->time = 30;
            return $exercise;
        }

        $category = $exercise->typeName == "Silový" ? "reps" : "time";
        $kind = ($category . "_" . $difficulty);

        $j = json_decode($exercise->$kind);
        $random_number = rand(0, count($j) - 1);
        $exercise->$category = $j[$random_number];

        return $exercise;

    }

    public function generateExercisesByArray($parts, $difficulty, $area)
    {

        $full = [];
        $count = count($parts);

        for ($i = 0; $i < $count; $i++) {

            $limit = 1;
            //check if parts are not same
            if ($count > $i + 1) {
                if ($parts[$i] == $parts[$i + 1]) {
                    $limit++;
                    $i++;

                    if ($count > $i + 1) {
                        if ($parts[$i] == $parts[$i + 1]) {
                            $limit++;
                            $i++;
                        }
                    }
                }
            }

            $queryTraining = $this->generateQuery($difficulty, $area);

            if (is_array($parts[$i])) {

                $oneExercise = $queryTraining
                    ->where('types.name', '=', $parts[$i][0])
                    ->where('cardio_type', '=', $parts[$i][1])
                    ->limit($limit)
                    ->get();

                foreach ($oneExercise as $exercise) {
                    array_push($full, $this->randomRepsOrTime($exercise, $difficulty));
                }

                continue;
            }

            if (is_object($parts[$i])) {

                $oneExercise = $queryTraining
                    ->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
                    ->where('body_parts.name', '=', $parts[$i]->{'0'})
                    ->orWhere('body_parts.name', '=', $parts[$i]->{'1'})
                    ->limit($limit)
                    ->get();

                foreach ($oneExercise as $exercise) {
                    array_push($full, $this->randomRepsOrTime($exercise, $difficulty, $area == "Strečing" || $area == "Rozcvička" && $exercise->body_part_id));
                }

                continue;
            }

            $oneExercise = $queryTraining
                ->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
                ->where('body_parts.name', '=', $parts[$i])
                ->addSelect('body_parts.reps_easy', 'body_parts.reps_medium', 'body_parts.reps_hard')
                ->limit($limit)
                ->get();

            foreach ($oneExercise as $exercise) {
                array_push($full, $this->randomRepsOrTime($exercise, $difficulty, $area == "Strečing" || $area == "Rozcvička" && $exercise->body_part_id));
            }

        }

        return $full;

    }
}
