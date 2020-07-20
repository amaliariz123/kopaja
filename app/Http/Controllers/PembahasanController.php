<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tax;
use App\Models\ExerciseQuestion;
use App\Models\ExerciseQuestionSolution;
use \Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Validator;
use File;
use DB;
use Illuminate\Validation\Rule;
use Redirect;
use Session;

class PembahasanController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $pajak = Tax::all()->pluck('name','id');
    
    	return view('pembahasan_soal.pembahasan_index', compact('pajak'));
    }
    
    public function getSoal(Request $request) {
        $soal = ExerciseQuestion::where('id_tax','=',$request->get('id'))->pluck('question','id');
        	
        return response()->json($soal);	
    }

     /**
     * Fetch data from model with datatables.
     * @return Response
     */
     public function getData()
     {
     	$soal = DB::table('exercise_question_solutions')
     			->join('exercise_questions','exercise_questions.id','=','exercise_question_solutions.question_id')
     			->join('taxes','taxes.id','=','exercise_questions.id_tax')
     			->select('exercise_question_solutions.id as id','exercise_questions.id as question_id','exercise_questions.question as question','exercise_question_solutions.solution as solution','exercise_question_solutions.created_at as created_at','exercise_question_solutions.image as image','taxes.id as tax_id','taxes.name as tax_name')
     			->orderByDesc('exercise_question_solutions.updated_at')
     			->get();

     	return datatables()->of($soal)->addColumn('option', function($row) {
            $btn = '<button id="detail-btn" class="btn btn-info m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Detail"> <i class="fa fa-clipboard-list"></i></button>';
            $btn = $btn.'  <a  href="'.url('pembahasan_soal/edit/'.$row->id).'" id="edit-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Edit"><i class="la la-pencil-square"></i></a>';
            $btn = $btn.'  <button id="delete-btn" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Delete"><i class="la la-trash"></i></button>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);

     }

    public function create($id)
    {
        $question = ExerciseQuestion::find($id);
        $tax = Tax::where('id','=',$question->id_tax)->first();
        // return $tax->name;
        return view('pembahasan_soal.pembahasan_store', compact('question','tax'));
    }
    
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
    */
    public function store(Request $request)
    {
        $rules = [
        	'question_id' => 'required|integer',
        	'solution' => 'required',
        	'image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()) {
        	session(['error' => $validator->errors()->all()]);
        	return back()->withInput();
        } else {
        	if(!empty($request->image))
            {
                $file = $request->file('image');
                $extensions = strtolower($file->getClientOriginalExtension());
                $date = date('YmdHi');
                $filename = 'image_'.$date.'.'.$extensions;
                Storage::put('public/images/pembahasan_soal/'.$filename, File::get($file));
            } else {
                $filename = null;
            }

            ExerciseQuestionSolution::create([
            'question_id' => request('question_id'),
            'solution' => request('solution'),
            'image' => $filename,
            ]);

            session(['success' => ['Pembahasan berhasil ditambahkan.']]);
            return redirect()->route('pembahasan.soal');
        }
    }

    public function getImageUrl($id)
    {
    	$data = ExerciseQuestionSolution::find($id);

    	return Image::make(Storage::get('public/images/pembahasan_soal/'.$data->image))->response();
    }

    public function edit($id)
    {
    	$data = ExerciseQuestionSolution::find($id);
    	$question = ExerciseQuestion::where('id','=',$data->question_id)->first();
    	$tax = Tax::where('id','=',$question->id_tax)->first();
    	
    	return view('pembahasan_soal.pembahasan_edit', compact('data','question','tax'));
    }

    public function update(Request $request, $id)
    {
    	$data = ExerciseQuestionSolution::find($id);

    	$rules = [
        	'question_id' => 'required|integer',
        	'solution' => 'required',
        	'image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails())  {
        	session(['error' => $validator->errors()->all()]);
        	return back()->withInput();
        } else {
        	if(!empty($request->image)) {
                $file = $request->file('image');
                $extensions = strtolower($file->getClientOriginalExtension());
                $date = date('YmdHi');
                $filename = 'image_'.$date.'.'.$extensions;
                Storage::delete('public/images/pembahasan_soal/' . $data->image);
                Storage::put('public/images/pembahasan_soal/'.$filename, File::get($file));
            } else {
                $filename = $data->image;
            }
    	}

    	$data->question_id = $request->question_id;
    	$data->solution = $request->solution;
    	$data->image = $filename;
    	$data->save();

    	session(['success' => ['Pembahasan berhasil diperbarui.']]);
        return redirect()->route('pembahasan.soal');
	}

	public function delete($id)
	{
		$data = ExerciseQuestionSolution::find($id);

		Storage::delete('public/images/pembahasan_soal/'.$data->image);
		$data->delete();

		return response()->json(['success' => 'Data deleted successfully']);
	}
}
