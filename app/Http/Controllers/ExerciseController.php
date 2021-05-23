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

        dd($warmUp);


        $aa = DB::table('exercises')
            ->join('body_sections', 'exercises.body_section_id', '=', 'body_sections.id')
            ->join('body_parts', 'body_sections.id', '=', 'body_parts.body_section_id')
            ->select('body_sections.name as section', 'exercises.*', 'body_parts.name as parts')
//                ->groupBy('exercises.id')
            ->get();

        dd($aa);


//        $warmUp = Exercise::take(2)->get();
//        dd($warmUp);
        $training = Exercise::skip(2)->take(3)->get();
//        dd($training);
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
}
