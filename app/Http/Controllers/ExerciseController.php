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


        return view('current-training',
            [
                "warmUp" => $fullTraining['warmUp'],
                "training" => $fullTraining['training']
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

                        $queryWarmUp = $this->generateQuery($data['difficulty'], 'Rozcvička');

                        $warmUp = $queryWarmUp
                            ->where('types.name', '=', 'Kardio')
                            ->where('cardio_type', '=', 'Nohy')
                            ->limit(2)
                            ->get();


                        foreach ($warmUp as $value){
                            array_push($fullWarmUp, $this->randomRepsOrTime($value));
                        }

                        $queryWarmUp = $this->generateQuery($data['difficulty'], 'Rozcvička');

                        $warmUpUpperBody = $queryWarmUp
                            ->join('body_sections', 'body_sections.id', '=', 'exercises.body_section_id')
                            ->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
                            ->where('body_sections.name', '=', 'upper-body')
                            ->addSelect('body_parts.reps_easy')
                            ->first();

                        array_push($fullWarmUp, $this->randomRepsOrTime($warmUpUpperBody));

                        $partsForTraining = ['Celé nohy', 'Zadok', 'Celý vrch', 'Horný chrbát'];
                        $countOfRounds = 2;
//                        dd($fullWarmUp);

                        for ($i = 0; $i < $countOfRounds; $i++) {

                            $round = [];

                            for ($j = 0; $j < count($partsForTraining); $j++) {
                                $queryTraining = $this->generateQuery($data['difficulty'], 'Tréning');

                                $onePart = $queryTraining
                                    ->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
                                    ->where('body_parts.name', '=', $partsForTraining[$j])
                                    ->addSelect('body_parts.reps_easy')
                                    ->first();
                                array_push($round, $this->randomRepsOrTime($onePart));
                            }

                            $queryTraining = $this->generateQuery($data['difficulty'], 'Tréning');

                            $trainingCardio = $queryTraining
                                ->where('types.name', '=', 'Kardio')
                                ->where('cardio_type', '=', 'Nohy')
                                ->first();


                            array_push($round, $this->randomRepsOrTime($trainingCardio));


                            array_push($fullTraining, $round);

                        }

                        return array('warmUp' => $fullWarmUp, 'training' => $fullTraining);

                        break;
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
}
