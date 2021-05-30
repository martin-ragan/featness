<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExerciseController extends Controller {



    public function generateTraining(Request $request) {

        // validate data if they are OK
        $data = $request->validate([
            'body-part' => ['string', 'in:upper-body,lower-body,whole-body'],
            'difficulty' => ['string', 'in:easy-training,medium-training,hard-training'],
            'training-time' => ['string', 'in:short-time,long-time']
        ]);


        //generate warm up query and use it for get two kardio results
        $queryWarmUp = $this->generateQuery('Ľahký', 'Rozcvička');

        $warmUp = $queryWarmUp
            ->join('types', 'types.id', '=', 'exercises.type_id')
            ->where('types.name', '=', 'Kardio')
            ->where('cardio_type', '=', 'Nohy')
            ->select('exercises.*')
            ->limit(2)
            ->get();

//        $queryWarmUp = $this->generateQuery('Ľahký', 'Rozcvička');
//
//        $e = $queryWarmUp
//            ->select('exercises.*')
//            ->get();
////        $e[0]->name = "jou";
//        dd($e);


        $training = [];
        $parts = ['Celé nohy', 'Zadok', 'Celý vrch', 'Horný chrbát'];
        $countOfRounds = 2;

        for ($i = 0; $i < $countOfRounds; $i++) {

            $round = [];

            for ($j = 0; $j < count($parts); $j++) {
                $queryTraining = $this->generateQuery('Ľahký', 'Tréning');

                $celeNohy = $queryTraining
                    ->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
                    ->where('body_parts.name', '=', $parts[$j])
                    ->select('exercises.*')
                    ->inRandomOrder()
                    ->first();
                array_push($round, $celeNohy);
            }


            $queryTraining = $this->generateQuery('Ľahký', 'Tréning');

            $trainingCardio = $queryTraining
                ->join('types', 'types.id', '=', 'exercises.type_id')
                ->where('types.name', '=', 'Kardio')
                ->where('cardio_type', '=', 'Nohy')
                ->select('exercises.*')
                ->inRandomOrder()
                ->first();

            array_push($round, $trainingCardio);


            array_push($training, $round);

        }



//$query = $this->generateQuery('Ľahký', 'Tréning');
//        $groupByLogic = $query->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
////            ->distinct()
//            ->select('exercises.name', 'body_parts.name as arna')
//            ->inRandomOrder()
////            ->groupBy('body_parts.id')
//            ->get()->toArray();
//        dd($groupByLogic);
//        $training = (object)$training;
//dd($warmUp);


        return view('current-training',
            [
                "warmUp" => $warmUp,
                "training" => $training
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


    public function generateQuery($difficulty, $area){
        $query =  DB::table('exercises')
            ->join('difficulty_exercise', 'exercises.id', '=', 'difficulty_exercise.exercise_id')
            ->join('difficulties', 'difficulty_exercise.difficulty_id', '=', 'difficulties.id')
            ->where('difficulties.name', '=', $difficulty)
            ->join('area_exercise', 'exercises.id', '=', 'area_exercise.exercise_id')
            ->join('areas', 'area_exercise.area_id', '=', 'areas.id')
            ->where('areas.name', '=', $area)
            ->inRandomOrder();
        return $query;
    }
}
