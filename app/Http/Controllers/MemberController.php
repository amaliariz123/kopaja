<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberQuizHistory;
use App\Models\User;
use App\Models\Member;
use App\Models\Tax;
use App\Models\ExerciseQuestion;
use App\Models\Developer;
use App\Models\ExampleExercise;
use Auth;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pajak = Tax::get();
        $sum_member = count(Member::all());
        $sum_materi = count(Tax::all());
        $sum_soal = count(ExerciseQuestion::all());
        $sum_dev = count(Developer::all());

        return view('index', compact('sum_materi', 'sum_member', 'sum_dev', 'sum_soal', 'pajak'));
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pajak = Tax::with('exampleExercises','exerciseQuestions')->where('id', $id)->first();
        return view ('materi.beamaterai', compact('pajak'));
    }
    public function showContohSoal($id)
    {
        $name = ExampleExercise::with('tax')->where('id_tax', $id)->first();
        $example = ExampleExercise::with('tax')->where('id_tax', $id)->get();
// dd($example);    

        return view ('latihansoal.latsoalbeamaterai', compact('example', 'name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getQuizHistory() {
        $data = User::where('id', '=', Auth::user()->id)->first()->id;
        $member = Member::where('user_id', $data)->first()->id;

        $history = MemberQuizHistory::with('quiz')->where('member_id', $member)->get();
// dd($history[]->created_at);
        $data = [];
        for ($i=0; $i < count($history) ; $i++) {
            $history['created_at'] = $history[$i]->created_at;
            $history['title'] = $history[$i]->quiz->title;
            $history['score'] = $history[$i]->score;
            $data[] = $history;
        }
        dd($data);
        return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<i class="ti-info-alt" id="detail-btn"></i>';
                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
        
     }


}
