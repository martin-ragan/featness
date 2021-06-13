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

        dd($fullTraining);

        return view('current-training',
            [
                "warmUp" => $fullTraining['warmUp'],
                "training" => $fullTraining['training'],
                "stretching" => $fullTraining['stretching']
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
                            ["Horný chrbát", "Horný chrbát", "Priame brucho", ['Kardio', 'Brucho']]
                        ],
                        'long-time' => [
                            ["Horný chrbát", "Celý vrch", "Priame brucho", ['Kardio', 'Brucho']],
                            ["Horný chrbát", "Priame brucho", "Priame brucho", "Šikmé brucho"],
                            ["Horný chrbát", "Horný chrbát", "Priame brucho", ['Kardio', 'Brucho']]
                        ]
                    ],
                    'stretching' => [
                        'Krk', 'Ramená', "Spodný chrbát", "Spodný chrbát"
                    ],
                ],

                'medium-training' => [
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
                            ['Celé nohy', "Zadok", 'Celé nohy', 'Priame brucho']
                        ],
                        'long-time' => [
                            ['Celé nohy', "Zadok", 'Zadok', 'Priame brucho'],
                            ['Celé nohy', "Zadok", 'Celé nohy', 'Priame brucho'],
                            ['Celé nohy', "Zadok", 'Celé nohy', 'Priame brucho']
                        ]
                    ],
                    'stretching' => [
                        'Spodný chrbát', 'Spodný chrbát', 'Zadné stehná', 'Zadné stehná'
                    ],
                ],

                'medium-training' => [
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
                            ['Celé nohy', "Zadok", "Horný chrbát", "Šikmé brucho", ["Kardio", "Brucho"]]
                        ],
                        'long-time' => [
                            ['Celé nohy', 'Celé nohy', 'Horný chrbát', 'Priame brucho', 'Priame brucho'],
                            ['Celé nohy', ["Kardio", "Nohy"], "Horný chrbát", "Horný chrbát", 'Priame brucho'],
                            ['Celé nohy', "Zadok", "Horný chrbát", "Šikmé brucho", ["Kardio", "Brucho"]]
                        ]
                    ],
                    'stretching' => [
                        'Spodný chrbát', 'Spodný chrbát', 'Zadné stehná', 'Zadné stehná'
                    ],
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

                        ],
                        'long-time' => [

                        ]
                    ],
                    'stretching' => [
                        (object) ["Krk", "Ramená"], 'Spodný chrbát', 'Spodný chrbát', 'Zadné stehná'
                    ],
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
                ],
            ]
        ];
        $fullStretching = $this->generateExercisesByArray($exerciseDivide[$data['body-section']][$data['difficulty']]['stretching'], $data['difficulty'], 'Strečing');


        $trainingExercises = $exerciseDivide[$data['body-section']][$data['difficulty']]['training'][$data['training-time']];

        $fullWarmUp = $this->generateExercisesByArray($exerciseDivide[$data['body-section']][$data['difficulty']]['warm-up'], $data['difficulty'], "Rozcvička");

        for ($i = 0; $i < count($trainingExercises); $i++) {
            array_push($fullTraining, $this->generateExercisesByArray($trainingExercises[$i], $data['difficulty'], 'Tréning'));
        }

        $fullStretching = $this->generateExercisesByArray($exerciseDivide[$data['body-section']][$data['difficulty']]['stretching'], $data['difficulty'], 'Strečing');

        return array('warmUp' => $fullWarmUp, 'training' => $fullTraining, 'stretching' => $fullStretching);


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

            if (is_object($parts[$i])){

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
