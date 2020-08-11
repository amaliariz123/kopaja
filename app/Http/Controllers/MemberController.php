<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberQuizHistory;
use App\Models\QuizQuestion;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Member;
use App\Models\Testimonial;
use App\Models\Tax;
use App\Models\ExerciseQuestion;
use App\Models\Developer;
use App\Models\ExampleExercise;
use App\Models\MemberExerciseAnswer;
use App\Models\MemberExercise;
use App\Models\ExerciseQuestionSolution;
use App\Models\PremiumCode;
use App\Models\MemberQuizAnswers;
use DB;
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

        $testi = Testimonial::with('member.user')->get();
        
        return view('index', compact('sum_materi', 'sum_member', 'sum_dev', 'sum_soal', 'pajak', 'testi'));
    }
    
    public function show($id)
    {
        $pajak = Tax::with('exampleExercises','exerciseQuestions')->where('id', $id)->first();
        return view ('member.materi_pajak', compact('pajak'));
    }
    public function showContohSoal($id)
    {
        $pajak = Tax::with('exampleExercises')->where('id', $id)->first();
        // dd($pajak);
        $example = ExampleExercise::with('tax')->where('id_tax', $id)->get();

        return view ('member.contoh_soal', compact('example', 'pajak'));
    }
    public function showLatihanSoal($id)
    {
        $pajak = Tax::with('exerciseQuestions')->where('id', $id)->first();
        $exercise = ExerciseQuestion::with('tax')->where('id_tax', $id)->get();
        $member = Member::where('user_id', Auth::user()->id)->first()->id;

        return view ('member.latihan_soal', compact('exercise', 'pajak', 'member'));
    }
    public function pembahasan($id)
    {
        $data = User::where('id', '=', Auth::user()->id)->first()->id;
        $member = Member::where('user_id', $data)->first()->id;
        $pajak = Tax::with('exerciseQuestions')->where('id', $id)->first();
        $answer = MemberExerciseAnswer::with('exerciseQuestion', 'exerciseQuestion.exerciseQuestionSolution')
        ->whereHas('exerciseQuestion', function($q) use($id) {
            $q->where('id_tax',$id);
        })->where('member_id', $member)->get();
        
        // dd($answer);
        return view ('member.pembahasan_soal', compact('pajak', 'answer'));
    }
    public function showUpgrade()
    {
        return view ('member.upgrade');
    }
    public function upgrade(Request $request){
        $upgrade = PremiumCode::where('code', $request->code)->where('status', "non-aktif")->first();
        if($upgrade != null){
            $member = Member::where('user_id', Auth::user()->id)->first();
            $member->premium_code = $request->code;
            $member->member_status = "premium";
            $member->save();

            $update_code = PremiumCode::where('code', $request->code)->first();
            $update_code->status = "aktif";
            $update_code->save();
        } else {
            return redirect()->route('upgrade.show')->withErrors(['error'=>'error']);;
        }
        return redirect()->route('load');
    }

    public function cekLatihan(Request $request, $id){
        $data = User::where('id', '=', Auth::user()->id)->first()->id;
        $member = Member::where('user_id', $data)->first()->id;
        $exercise = ExerciseQuestion::with('tax')->where('id_tax', $id)->get();
        $hasil=0;
        $isDone = MemberExercise::where('tax_id', $id)->where('member_id', $member)->first();
        if(empty($isDone)){
            foreach($exercise as $soal){
                $id_soal = $soal->id;
                $answer = new MemberExerciseAnswer();
                $answer->member_id = $member;
                $answer->question_id = $id_soal;
                $answer->answer = $request->$id_soal;
                if($request->$id_soal == $soal->right_answer){
                    $answer->isRight = 1;
                    $answer->save();
                    $hasil+=1;
                } else {
                    $answer->isRight = 0;
                    $answer->save();
                }
            }

            $result = new MemberExercise();
            $result->member_id = $member;
            $result->tax_id = $id;
            $result->score = ($hasil/count($exercise)*100);
    
            $result->save();
        } else {
            foreach($exercise as $soal){
                $id_soal = $soal->id;
                $answer = MemberExerciseAnswer::where('question_id', $id_soal)->where('member_id', $member)->first();
                if($answer != null){
                    $answer->member_id = $member;
                    $answer->question_id = $id_soal;
                    $answer->answer = $request->$id_soal;
                    if($request->$id_soal == $soal->right_answer){
                        $answer->isRight = 1;
                        $answer->save();
                        $hasil+=1;
                    } else {
                        $answer->isRight = 0;
                        $answer->save();
                    }
                } else {
                    $answer = new MemberExerciseAnswer();
                    $answer->member_id = $member;
                    $answer->question_id = $id_soal;
                    $answer->answer = $request->$id_soal;
                    if($request->$id_soal == $soal->right_answer){
                        $answer->isRight = 1;
                        $answer->save();
                        $hasil+=1;
                    } else {
                        $answer->isRight = 0;
                        $answer->save();
                    }
                }
            }

            $result = MemberExercise::where('tax_id', $id)->where('member_id', $member)->first();
            $result->member_id = $member;
            $result->tax_id = $id;
            $result->score = ($hasil/count($exercise)*100);
    
            $result->save();
        }
        $hasil = round((($hasil/count($exercise))*100));
        return redirect()->route('latihan_soal.show', ['id' => $id])->with('popup', $hasil);
    }

    public function showKuis($id_kuis)
    {
        $member = Member::where('user_id', Auth::user()->id)->first()->id;

        $durasi = Quiz::select('duration')->where('id',$id_kuis)->get();
        $kuis = QuizQuestion::with('quiz')->where('quiz_id', $id_kuis)->simplePaginate(1);
        $allSoal = QuizQuestion::with('quiz')->where('quiz_id', $id_kuis)->get();
        $totalsoal =QuizQuestion::with('quiz')->where('quiz_id', $id_kuis)->count();
        $countdown = $durasi[0]->duration;
        $page = $kuis->currentPage();
        // dd($allSoal);
        return view ('member.quiz_page', compact('kuis','countdown','totalsoal','page', 'id_kuis','member','allSoal'));
    }

    public function showSoal($id_soal)
    {
        $kuis_soal = QuizQuestion::with('quiz')->where('id', $id_soal)->first();
        dd($kuis_soal);
        // return redirect()->route('soal_detail', ['id' => $id])->with('popup', $hasil);
        // return view ('member.quiz_page', compact('kuis_soal'));
    }

    public function getQuizHistory() {
        $kuis = Quiz::get();
        $member = Member::where('user_id', Auth::user()->id)->first()->id;
        $history = MemberQuizHistory::with('quiz')->where('member_id', $member)->get();
        $id_quiz = MemberQuizHistory::with('quiz')->where('member_id', $member)->first();
        // dd($kuis);
        $history_quiz = User::with('members.historyQuiz')
        ->whereHas('members', function($q) use($member) {
            $q->where('id',$member);
        })->get();
        return view ('member.quiz_history', compact('history','history_quiz','id_quiz', 'kuis'));
    }
    
    public function detailQuizHistory($id_history){
        $data = User::where('id', '=', Auth::user()->id)->first()->id;
        $member = Member::where('user_id', $data)->first()->id;

        $history_quiz = MemberQuizHistory::with('quiz')->where('member_id', $member)->where('id',$id_history)->get();

        return response()->json($history_quiz); 
    }

    public function optionChecked($nomor, $value){
        session([$nomor."id_soal" => $value]);
        return response()->json([
            'success' => 'Save!'
        ]);
    }

    public function quizResult(Request $request, $id_kuis){
        $member = Member::where('user_id', Auth::user()->id)->first()->id;
        $soal = QuizQuestion::where('quiz_id', $id_kuis)->get();
        $hasil = 0;
        foreach($soal as $item){
            $jawab = new MemberQuizAnswers();
            $jawab->member_id = $member;
            $jawab->question_id = $item->id;
            $jawab->answer = session($item->id."id_soal");
            if($item->right_answer == session($item->id."id_soal")){
                $jawab->isRight = 1;
                $jawab->save();
                $hasil+=1;
            } else {
                $jawab->isRight = 0;
                $jawab->save();
            }
            $request->session()->forget($item->id."id_soal");
        }
        $jlh = QuizQuestion::where('quiz_id', $id_kuis)->count();
        $histroy = new MemberQuizHistory();
        $histroy->member_id = $member;
        $histroy->quiz_id = $id_kuis;
        $histroy->score = ($hasil/$jlh)*100;
        $histroy->save();
        $nilai = round((($hasil/$jlh)*100));

        // return view ('quiz_history', compact('history','history_quiz','id_quiz', 'kuis'));
        return redirect()->route('riwayat_kuispajak')->with('popup', $nilai);
    }

    public function destroyHistory($id){
        MemberQuizHistory::findOrFail($id)->delete($id);
        // return redirect()->route('riwayat_kuispajak')
        //                 ->with('success','History deleted successfully');
        return response()->json(['success' => 'History deleted successfully']);
    }
    
}