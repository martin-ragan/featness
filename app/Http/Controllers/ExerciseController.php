<?php

namespace App\Http\Controllers;

use App\Models\Difficulty;
use App\Models\Exercise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExerciseController extends Controller {

    public function currentTraining(Request $request) {
//        dd($request->all());
        $data = $request->validate([
            'body_section' => ['string', 'in:Horná,Spodná,Celé telo'],
            'type' => ['string', 'in:Ľahký,Stredný,Ťažký'],
            'time' => ['string', 'in:short,long']
        ]);

//        dd($data);
//        $warmUp = Difficulty::where('name', '=', $data['type'])->first()->exercises->areas()->where('name', '=', 'Rozcvička');

        $warmUp = DB::table('exercises')
            ->join('difficulty_exercise', 'exercises.id', '=', 'difficulty_exercise.exercise_id')
            ->join('difficulties', 'difficulty_exercise.difficulty_id', '=', 'difficulties.id')
            ->where('difficulties.name', '=', 'Ľahký')
            ->join('area_exercise', 'exercises.id', '=', 'area_exercise.exercise_id')
            ->join('areas', 'area_exercise.area_id', '=', 'areas.id')
            ->where('areas.name', '=', 'Rozcvička')
            ->join('types', 'types.id', '=', 'exercises.type_id')
            ->where('types.name', '=', 'Kardio')
            ->where('cardio_type', '=', 'Nohy')
            ->select('exercises.*')
            ->inRandomOrder()
            ->limit(2)
            ->get();

//        dd($warmUp);

        $trainingRound = [];
$parts = ['Celé nohy', 'Zadok', 'Celý vrch', 'Horný chrbát'];

        for($i = 0; $i < count($parts); $i++) {
//            dd($i);

            $celeNohy = DB::table('exercises')
                ->join('difficulty_exercise', 'exercises.id', '=', 'difficulty_exercise.exercise_id')
                ->join('difficulties', 'difficulty_exercise.difficulty_id', '=', 'difficulties.id')
                ->where('difficulties.name', '=', 'Ľahký')
                ->join('area_exercise', 'exercises.id', '=', 'area_exercise.exercise_id')
                ->join('areas', 'area_exercise.area_id', '=', 'areas.id')
                ->where('areas.name', '=', 'Tréning')
                ->join('body_parts', 'exercises.body_part_id', '=', 'body_parts.id')
                ->where('body_parts.name', '=', $parts[$i])
                ->select('exercises.*')
                ->inRandomOrder()
                ->first();
            array_push($trainingRound, $celeNohy);
        }


        $trainingCardio = DB::table('exercises')
            ->join('difficulty_exercise', 'exercises.id', '=', 'difficulty_exercise.exercise_id')
            ->join('difficulties', 'difficulty_exercise.difficulty_id', '=', 'difficulties.id')
            ->where('difficulties.name', '=', 'Ľahký')
            ->join('area_exercise', 'exercises.id', '=', 'area_exercise.exercise_id')
            ->join('areas', 'area_exercise.area_id', '=', 'areas.id')
            ->where('areas.name', '=', 'Tréning')
            ->join('types', 'types.id', '=', 'exercises.type_id')
            ->where('types.name', '=', 'Kardio')
            ->select('exercises.*')
            ->inRandomOrder()
            ->first();

        array_push($trainingRound, $trainingCardio);




        return view('current-training',
            [
                "warmUp" => $warmUp,
                "training" => $trainingRound
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
}
