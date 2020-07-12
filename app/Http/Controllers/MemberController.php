<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberQuizHistory;
use App\Models\QuizQuestion;
use App\Models\Quiz;
use App\Models\User;
use App\Models\Member;
use App\Models\Province;
use App\Models\City;
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

    public function editProfile($id){
        
        $data = [];
        $data['user'] = User::where('id', '=', Auth::user()->id)->first();
        $province = Province::all()->pluck("province", "id");
        $data['member'] = Member::where('user_id','=',$id)->first();
    
        return  view('users.member_edit_profile', compact('data', 'province'));
    }

    public function editAccount($id){
        $data = User::where('id', '=', $id)->first();
        return view('users.member_change_pass', compact('data'));
    }

    public function getCity($id){
        $city = City::where('province_id', '=', $id)->pluck("city", "id");
        // dd(json_encode($city));
        return json_encode($city);
    }

    public function updateMemberProfile(Request $request, $id){
        // dd($request->city_id);
        // dd($request->fullname);

        if(!empty($request->profile_picture))
        {
            $file = $request->file('profile_picture');
            $extension = strtolower($file->getClientOriginalExtension());
            $filename = $id.'.'.$extension;
            \Storage::delete('public/images/user/'.$request->profile_picture);
            \Storage::put('public/images/user/'.$filename, \File::get($file));

            $user = DB::table('users')
            ->where('id',$id)
            ->update(['profile_picture' => $filename
            ]);
        }
        $user = DB::table('users')
            ->where('id',$id)
            ->update(['fullname' => $request->fullname
            ]);
        $member = DB::table('members')
            ->where('user_id', $id)
            ->update(['institution' => $request->institution,
                'province_id' => $request->province_id,
                'city_id' => $request->city_id,
                'date_of_birth' => $request->date_of_birth
            ]);

        $data = [];
        $data['user'] = User::where('id', '=', Auth::user()->id)->first();
        $province = Province::all()->pluck("province", "id");
        $data['member'] = Member::where('user_id','=',$id)->first();

        session(['success' => ['Profil berhasil diperbarui.']]);
        return  view('users.member_edit_profile', compact('data','province'));
    }

    public function updateAccount(Request $request, $id)
    {
        $user = User::find($id);    
        $rules = [
            'email' => 'required|email',
            'old_password' => 'nullable|min:8|max:20',
            'new_password' => 'nullable|min:8|max:20|different:old_password',
            'confirm_new_pass' => 'same:new_password',
        ];

        $validate = Validator::make($request->all(), $rules);
        if($validate->fails())
        {
            $notification = array(
                'message' => [$validate->errors()->all()], 
                'alert-type' => 'error'
            );
            return redirect()->withInput();
        } else {
            $notification = array(
                'message' => 'Berhasil diperbarui.', 
                'alert-type' => 'success'
                );
            $user->email = $request->email;
            if(Hash::check($request->old_password, $user->password))
            {
                $user->fill([
                    'password' => Hash::make($request->new_password)
                ]);
            }
            $user->save();
            session(['success' => ['Profil berhasil diperbarui.']]);
            return redirect()->back(); 
        }
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

        return view ('latihansoal.latsoalbeamaterai', compact('example', 'name'));
    }
    public function showLatihanSoal($id)
    {
        $name = ExerciseQuestion::with('tax')->where('id_tax', $id)->first();
        $exercise = ExerciseQuestion::with('tax')->where('id_tax', $id)->get();

        return view ('soal.soalbeamaterai', compact('exercise', 'name'));
    }
    public function pembahasan($id)
    {
        $data = User::where('id', '=', Auth::user()->id)->first()->id;
        $member = Member::where('user_id', $data)->first()->id;
        $name = ExerciseQuestion::with('tax')->where('id_tax', $id)->first();
        $answer = MemberExerciseAnswer::with('exerciseQuestion', 'exerciseQuestion.exerciseQuestionSolution')
        ->whereHas('exerciseQuestion', function($q) use($id) {
            $q->where('id_tax',$id);
        })->where('member_id', $member)->get();
        return view ('pembeamaterai', compact('name', 'answer'));
    }

    public function upgrade(Request $request){
        // dd($request);
        $member = Member::where('user_id', Auth::user()->id)->first()->id;
        $upgrade = PremiumCode::where('code', $request->code)->where('status', "non-aktif")->first();
        if($upgrade != null){
            $member = Member::where('user_id', Auth::user()->id)->first();
            $member->premium_code = $request->code;
            $member->status = "Premium";
            $member->save();

            $update_code = PremiumCode::where('code', $request->code)->first();
            $update_code->status = "Aktif";
            $update_code->save();
        }
        return redirect()->route('profile.show', ['id' => Auth::user()->id]);
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

            $result = MemberExercise::where('tax_id', $id)->where('member_id', $member)->first();
            $result->member_id = $member;
            $result->tax_id = $id;
            $result->score = ($hasil/count($exercise)*100);
    
            $result->save();
        }
        return redirect()->route('latihan_soal.show', ['id' => $id])->with('popup', $hasil);
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

    public function showKuis($id_kuis)
    {
        $durasi = Quiz::select('duration')->where('id',$id_kuis)->get();
        $kuis = QuizQuestion::with('quiz')->where('quiz_id', $id_kuis)->simplePaginate(1);
        $totalsoal =QuizQuestion::with('quiz')->where('quiz_id', $id_kuis)->count();
        $countdown = $durasi[0]->duration;
        $page = $kuis->currentPage();
        return view ('quiz_page', compact('kuis','countdown','totalsoal','page', 'id_kuis'));
    }
    public function getQuizHistory() {
        $kuis = Quiz::get();
        $id = Auth::user()->id;
        $history = MemberQuizHistory::with('quiz')->where('member_id', $id)->get();
        $id_quiz = MemberQuizHistory::with('quiz')->where('member_id', $id)->first();
        // dd($kuis);
        $history_quiz = User::with('members.historyQuiz')
        ->whereHas('members', function($q) use($id) {
            $q->where('id',$id);
        })->get();
        return view ('quiz_history', compact('history','history_quiz','id_quiz', 'kuis'));
    }
    
    public function detailQuizHistory($id_history){
        $data = User::where('id', '=', Auth::user()->id)->first()->id;
        $member = Member::where('user_id', $data)->first()->id;

        $history_quiz = MemberQuizHistory::with('quiz')->where('member_id', $member)->where('id',$id_history)->get();

        return response()->json($history_quiz);
        
    }

    public function optionChecked($nomor, $value){
        session([$nomor => $value]);

        return response()->json([
            'success' => 'Save!'
        ]);
    }

    public function quizResult($id_kuis){
        $member = Member::where('user_id', Auth::user()->id)->first()->id;
        $soal = QuizQuestion::where('quiz_id', $id_kuis)->get();
        $hasil = 0;
        foreach($soal as $item){
            $jawab = new MemberQuizAnswers();
            $jawab->member_id = $member;
            $jawab->question_id = $item->id;
            $jawab->answer = session($item->id);
            if($item->isRight == session($item->id)){
                $jawab->isRight = 1;
                $jawab->save();
                $hasil+=1;
            } else {
                $jawab->isRight = 0;
                $jawab->save();
            }
        }
        $jlh = QuizQuestion::where('quiz_id', $id_kuis)->count();
        $histroy = new MemberQuizHistory();
        $histroy->member_id = $member;
        $histroy->quiz_id = $id_kuis;
        $histroy->score = ($hasil/$jlh)*100;
        $histroy->save();

    }



}
