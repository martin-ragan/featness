<?php

namespace App\Http\Controllers;

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
                "stretching" => $fullTraining['stretching']
            ]
        );
    }



    public function generateQuery($difficulty, $area) {
        $query =  DB::table('exercises')
            ->join('difficulty_exercise', 'exercises.id', '=', 'difficulty_exercise.exercise_id')
            ->join('difficulties', 'difficulty_exercise.difficulty_id', '=', 'difficulties.id')
            ->where('difficulties.name', '=', $difficulty)
            ->join('area_exercise', 'exercises.id', '=', 'area_exercise.exercise_id')
            ->join('areas', 'area_exercise.area_id', '=', 'areas.id')
            ->where('areas.name', '=', $area)
            ->inRandomOrder()
            ->select('exercises.*');

        if ($area != "Strečing"){
            $query
                ->join('types', 'types.id', '=', 'exercises.type_id')
                ->addSelect('types.name as typeName', 'types.time_easy', 'types.time_medium', 'types.time_hard');
        }

        return $query;
    }


    public function generateData($data) {
        $fullWarmUp = [];
        $fullTraining = [];
        $fullStretching = [];
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

                        $warmUpArray = [["types" => "Kardio", "cardio_type" => "Nohy"],["types" => "Kardio", "cardio_type" => "Nohy"],["types" => "Kardio", "cardio_type" => "Nohy"]];
                        $fullWarmUp = $this->generateExercisesByArray($warmUpArray, $data['difficulty'], "Rozcvička");
//dd($fullWarmUp);
                        $partsForTraining = ['Celé nohy', ["types" => "Kardio", "cardio_type" => "Nohy"], 'Horný chrbát', 'Horný chrbát', 'Priame brucho'];
                        array_push($fullTraining, $this->generateExercisesByArray($partsForTraining, $data['difficulty'], 'Tréning'));

                        $partsForTraining = ['Celé nohy', "Zadok", "Horný chrbát", "Šikmé brucho", ["types" => "Kardio", "cardio_type" => "Nohy"]];
                        array_push($fullTraining, $this->generateExercisesByArray($partsForTraining, $data['difficulty'], 'Tréning'));



                        $stretchingArray = ['Spodný chrbát', 'Spodný chrbát', 'Zadné stehná', 'Zadné stehná'];
                        $fullStretching = $this->generateExercisesByArray($stretchingArray, $data['difficulty'], 'Strečing');

                        return array('warmUp' => $fullWarmUp, 'training' => $fullTraining, 'stretching' => $fullStretching);

                    case "medium-training":


                        break;

                    case "hard-training":

                        break;
                }
        }
    }

    public function randomRepsOrTime($exercise, $difficulty = "easy-training", $isStretching = false){

        $difficulty = substr($difficulty, 0, strpos($difficulty,"-"));
        if ($isStretching){
            $exercise->time = 30;
            return $exercise;
        }

        $category = $exercise->typeName == "Silový" ? "reps" : "time";
        $kind = ($category."_".$difficulty);

        $j = json_decode($exercise->$kind);
        $random_number = rand(0, count($j)-1);
        $exercise->$category = $j[$random_number];

        return $exercise;

    }

    public function generateExercisesByArray($parts, $difficulty, $area){

        $full = [];
        $count = count($parts);

        for ($i = 0; $i < $count; $i++) {
            $limit = 1;
            //check if parts are not same
            if ($count > $i+1){
                if ($parts[$i] == $parts[$i+1]){
                    $limit++;
                    $i++;

                    if ($count > $i+1){
                        if ($parts[$i] == $parts[$i+1]){
                            $limit++;
                            $i++;
                        }
                    }
                }
            }

            $queryTraining = $this->generateQuery($difficulty, $area);

            if (is_array($parts[$i])) {

                $oneExercise = $queryTraining
                    ->where('types.name', '=', $parts[$i]['types'])
                    ->where('cardio_type', '=', $parts[$i]['cardio_type'])
                    ->limit($limit)
                    ->get();

                foreach ($oneExercise as $exercise){
                    array_push($full, $this->randomRepsOrTime($exercise, $difficulty));
                }

                continue;
            }


            $oneExercise = $queryTraining
                ->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
                ->where('body_parts.name', '=', $parts[$i])
                ->addSelect('body_parts.reps_easy')
                ->limit($limit)
                ->get();

            foreach ($oneExercise as $exercise){
                array_push($full, $this->randomRepsOrTime($exercise, $difficulty, $area == "Strečing"));
            }

        }

        return $full;

    }
}
