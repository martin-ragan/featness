<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExerciseController extends Controller {


    public function generateTraining(Request $request) {

        // validate data if they are OK
        $data = $request->validate([
            'body-section' => ['string', 'in:upper-body,lower-body,whole-body'],
            'difficulty' => ['string', 'in:easy-training,medium-training,hard-training'],
            'training-time' => ['string', 'in:short-time,long-time']
        ]);


        $fullTraining = $this->generateData($data);

//dd($fullTraining);
        return view('current-training',
            [
                "warmUp" => $fullTraining['warmUp'],
                "training" => $fullTraining['training'],
//                "stretching" => $fullTraining['stretching']
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Exercise $exercise
     * @return \Illuminate\Http\Response
     */
    public function show(Exercise $exercise) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Exercise $exercise
     * @return \Illuminate\Http\Response
     */
    public function edit(Exercise $exercise) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Exercise $exercise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exercise $exercise) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Exercise $exercise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exercise $exercise) {
        //
    }


    public function generateQuery($difficulty, $area) {
        return DB::table('exercises')
            ->join('difficulty_exercise', 'exercises.id', '=', 'difficulty_exercise.exercise_id')
            ->join('difficulties', 'difficulty_exercise.difficulty_id', '=', 'difficulties.id')
            ->where('difficulties.name', '=', $difficulty)
            ->join('area_exercise', 'exercises.id', '=', 'area_exercise.exercise_id')
            ->join('areas', 'area_exercise.area_id', '=', 'areas.id')
            ->where('areas.name', '=', $area)
            ->join('types', 'types.id', '=', 'exercises.type_id')
            ->inRandomOrder()
            ->select('exercises.*', 'types.name as typeName', 'types.time_easy', 'types.time_medium', 'types.time_hard');
    }


    public function generateData($data) {
        $fullWarmUp = [];
        $fullTraining = [];
        switch ($data['body-section']) {
            case "upper-body":

                switch ($data['difficulty']) {

                    case "easy-training":

                        break;
                    case "medium-training":


                        break;

                    case "hard-training":

                        break;
                }
                break;


            case "lower-body":
                switch ($data['difficulty']) {

                    case "easy-training":

                        break;
                    case "medium-training":


                        break;

                    case "hard-training":

                        break;
                }
                break;


            case "whole-body":
                switch ($data['difficulty']) {
                    case "easy-training":


                        $fullWarmUp = $this->generateQuery($data['difficulty'], 'Rozcvička')
                            ->where('types.name', '=', 'Kardio')
                            ->where('cardio_type', '=', 'Nohy')
                            ->limit(3)
                            ->get()->toArray();

                        foreach ($fullWarmUp as $exercise){
                            $this->randomRepsOrTime($exercise);
                        }


                        $partsForTraining = ['Celé nohy', ["types" => "Kardio", "cardio_type" => "Nohy"], 'Horný chrbát', 'Horný chrbát', 'Priame brucho'];

                        array_push($fullTraining, $this->generateExercisesByArray($partsForTraining, $data['difficulty'], 'Tréning'));

                        $partsForTraining = ['Celé nohy', "Zadok", "Horný chrbát", "Šikmé brucho", ["types" => "Kardio", "cardio_type" => "Nohy"]];

                        array_push($fullTraining, $this->generateExercisesByArray($partsForTraining, $data['difficulty'], 'Tréning'));


                        return array('warmUp' => $fullWarmUp, 'training' => $fullTraining);

                    case "medium-training":


                        break;

                    case "hard-training":

                        break;
                }
        }
    }

    public function randomRepsOrTime($exercise, $difficulty = "easy"){
        $category = $exercise->typeName == "Silový" ? "reps" : "time";
        $kind = ($category."_".$difficulty);

        $j = json_decode($exercise->$kind);
        $random_number = rand(0, count($j)-1);
        $exercise->$category = $j[$random_number];

        return $exercise;

    }

    public function generateExercisesByArray($parts, $difficulty, $area){

        $full = [];

        for ($i = 0; $i < count($parts); $i++) {

            $queryTraining = $this->generateQuery($difficulty, $area);

            if (is_array($parts[$i])) {

                $oneExercise = $queryTraining
                    ->where('types.name', '=', $parts[$i]['types'])
                    ->where('cardio_type', '=', $parts[$i]['cardio_type'])
                    ->first();
                array_push($full, $this->randomRepsOrTime($oneExercise));
                continue;
            }


            $oneExercise = $queryTraining
                ->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
                ->where('body_parts.name', '=', $parts[$i])
                ->addSelect('body_parts.reps_easy')
                ->first();

            array_push($full, $this->randomRepsOrTime($oneExercise));
        }

        return $full;

    }
}
