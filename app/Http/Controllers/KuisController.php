<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\QuizQuestion;
use \Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Validator;
use File;
use DB;
use Illuminate\Validation\Rule;
use Redirect;
use Excel;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
    	$data = Quiz::all();

    	return view('kuis.kuis_index', compact('data'));
    }

    /**
     * Fetch data from model with datatables.
     * @return Response
     */
     public function getData()
     {
     	$data = Quiz::all();
        
        return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<a href="'.url('kuis/show/'.$row['id']).'" class="btn btn-info m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Detail"> <i class="la la-exclamation-circle"></i></a>';
            $btn =$btn . ' <button id="edit-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Edit"><i class="la la-pencil-square"></i></button>';
            $btn = $btn.'  <button id="delete-btn" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="la la-trash"></i></button>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
     }

     /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        // return $request;
    	$rules = [
    		'title' => 'required',
    		'description' => 'required',
    		'level' => 'required',
    		'duration' => 'required',
    		'image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
    	];

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails())
    	{
    		return response()->json(['errors' => $validator->errors()->all()]);
    	} else {
    		if(!empty($request->image)) 
    		{
    			$file = $request->file('image'); 
				$extension=strtolower($request->file('image')->getClientOriginalExtension());
				$date = date('YmdHi');
				$filename = 'kuis_'.$date.'.'.$extension;
				Storage::put('public/images/kuis/'.$filename, File::get($file));
    		} else {
    			$filename = null;
    		}

    		//store data to table taxes
	    	Quiz::create([
	    		'title' => request('title'),
	    		'description' => request('description'),
	    		'level' => request('level'),
	    		'duration' => request('duration'),
	    		'image' => $filename,
	    	]);

	    	return response()->json(['success' => 'Data added successfully!']);
    	}
    }

    public function getImageUrl($id)
    {
    	$data = Quiz::find($id);

    	return Image::make(Storage::get('public/images/kuis/'.$data->image))->response();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
     public function edit($id)
     {
     	$data = Quiz::find($id);

     	return response()->json(['status' => 'OK', 'data' => $data], 200);
     }


     /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
     public function update(Request $request, $id)
     {
     	$data = Quiz::find($id);

     	$rules = [
     		'title' => 'required',
    		'description' => 'required',
    		'level' => 'required',
    		'duration' => 'required',
    		'image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
     	];

     	$validator = Validator::make($request->all(), $rules);
     	if($validator->fails())
     	{
     		return response()->json(['errors' => $validator->errors()->all()]); 
     	} else {
     		if(!empty($request->image))
    		{
    			$file = $request->file('image');
    			$extension = strtolower($file->getClientOriginalExtension());
    			$date = date('YmdHi');
				$filename = 'kuis_'.$date.'.'.$extension;
                Storage::delete('public/images/kuis/' . $data->image);
    			Storage::put('public/images/kuis/'.$filename, File::get($file));
    		} else {
    			$filename = $data->image;
    		}

    		$data->title=$request->title;
		    $data->description=$request->description;
		    $data->level=$request->level;
		    $data->duration=$request->duration;
		    $data->image=$filename;
		    $data->save();

		    return response()->json(['success'=>'Data updated successfully']);
     	}
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
     public function delete($id)
     {
     	$data = Quiz::find($id);

     	Storage::delete('public/images/kuis/'.$data->image);
     	$data->delete();

     	return response()->json(['success' => 'Data deleted successfully']);
     }

     /**
     * Show specified resource.
     * @param int $id
     * @return Response
     */
     public function show($id)
     {
     	$data = Quiz::find($id);
     	$soal = QuizQuestion::where('quiz_id','=',$id)->paginate(5);
     	$number = $soal->firstItem();
        $totalSoal = DB::table('quiz_questions')->where('quiz_id','=',$id)->get();
        
     	 return view('kuis.kuis_detail', compact('data','soal','number','totalSoal'));
     }


    /***************************************************** 
    ################ SOAL-SOAL KUIS ######################
    *****************************************************/

    /**
    * Show the form for creating a new resource.
    * @return Response
    */
    public function createSoal($id)
    {
    	$data = Quiz::find($id);

    	return view('kuis.soal_create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
    */
    public function storeSoal(Request $request, $id)
    {
        $rules = [
            'quiz_id' => 'required|integer',
            'question' => 'required',
            'image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'right_answer' => 'required|integer|between:1,4',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            //return response()->json(['errors' => $validator->errors()->all()]);
            session(['error' => $validator->errors()->all()]);

            return back()->withInput();

        } else {
            if(!empty($request->image))
            {
                $file = $request->file('image');
                $extensions = strtolower($file->getClientOriginalExtension());
                $date = date('YmdHi');
                $filename = 'image_question_'.$date.'.'.$extensions;
                Storage::put('public/images/soal/'.$filename, File::get($file));
            } else {
                $filename = null;
            }

            QuizQuestion::create([
            'quiz_id' => request('quiz_id'),
            'question' => request('question'),
            'option_a' => request('option_a'),
            'option_b' => request('option_b'),
            'option_c' => request('option_c'),
            'option_d' => request('option_d'),
            'right_answer' => request('right_answer'),
            'image' => $filename,
            ]);

            $quiz = Quiz::find($id);

            //return response()->json(['success'=>'Data added successfully']);
            session(['success' => ['Soal berhasil ditambahkan.']]);

            //return redirect()->route('');
            return redirect()->route('detail.kuis.soal', $request->quiz_id);
        }
	}

    public function editSoal($quiz_id, $id)
    {
        $soal = QuizQuestion::find($id);
        $data = Quiz::find($soal->quiz_id);

        return view('kuis.soal_edit', compact('soal', 'data'));
    }

    public function updateSoal(Request $request, $quiz_id, $id)
    {
        $soal = QuizQuestion::find($id);

        $rules = [
            'quiz_id' => 'required|integer',
            'question' => 'required',
            'image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'right_answer' => 'required|integer|between:1,4',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            //return response()->json(['errors' => $validator->errors()->all()]);
            session(['error' => $validator->errors()->all()]);

            return back()->withInput();

        } else {
            if(!empty($request->image))
            {
                $file = $request->file('image');
                $extensions = strtolower($file->getClientOriginalExtension());
                $date = date('YmdHi');
                $filename = 'image_question_'.$date.'.'.$extensions;
                Storage::delete('public/images/soal/' . $soal->image);
                Storage::put('public/images/soal/'.$filename, File::get($file));
            } else {
                $filename = $soal->image;
            }

            $soal->quiz_id = $request->quiz_id;
            $soal->question = $request->question;
            $soal->image = $filename;
            $soal->option_a = $request->option_a;
            $soal->option_b = $request->option_b;
            $soal->option_c = $request->option_c;
            $soal->option_d = $request->option_d;
            $soal->right_answer = $request->right_answer;
            $soal->save();

            session(['success' => ['Soal berhasil diperbarui!']]);

            return redirect()->route('detail.kuis.soal', [$soal->quiz_id, $soal->id]);
        }
    }

    public function deleteSoal($quiz_id,$id)
    {
        $data = QuizQuestion::find($id);

        Storage::delete('public/images/soal/'.$data->image);
        $data->delete();

        return response()->json(['success' => 'Data deleted successfully']);
    }

    public function search(Request $request, $quiz_id)
    {
        if($request->ajax())
        {
            $data = Quiz::where('id',$quiz_id)->first();
            $query = $request->get('query');
            $query = str_replace(" ","%",$query);
            $soal = QuizQuestion::where('quiz_id',$data->id)->where('question','like','%'.$query.'%')->paginate(5);
            $number = $soal->firstItem();
        }

        return view('kuis.soal', compact('data','soal','number'))->render();
    }

    public function saveImport(Request $request, $quiz_id)
    {
         // return $request;

        $this->validate(request(),
            [
                'excel' => 'required|mimes:xlsx'
            ]
        );

        $data = Quiz::find($quiz_id);
        

        $file = $request->file('excel');
        $import = Excel::load($file)->get();
        if(!$import)
        {
            session(['error' => ['Something wrong!']]);
            return redirect()->route('detail.kuis.soal', $quiz_id);
        }

        $import_data_filter = array_filter($import->toArray());
        foreach ($import_data_filter as $key => $value) {
            if(($check=array_search('Berapa besarnya tarif PPh Pasal 22 atas pembelian barang oleh bendahara pemerintah dan KPA?', $value)) === true ) 
            {
                unset($import_data_filter[$key]);
            } else {
                if(implode($value) == null)
                {
                    unset($import_data_filter[$key]);
                }
            }
        }

        $import_data_filter = array_values($import_data_filter);
        $totalQuestion = count($import_data_filter);
        $messagesError = [];
        foreach ($import_data_filter as $key => $value) {
            $messagesError[$key.'.question.required'] = "Question field number ".($key+1)." is empty";
            $messagesError[$key.'.question.distinct'] = "Question field number ".($key+1)." has duplicate value";
            $messagesError[$key.'.question.unique'] = "Question field number ".($key+1)." has already been taken";
            $messagesError[$key.'.option_a.required'] = "Option a field number ".($key+1)." is empty";
            $messagesError[$key.'.option_b.required'] = "Option b field number ".($key+1)." is empty";
            $messagesError[$key.'.option_c.required'] = "Option c field number ".($key+1)." is empty";
            $messagesError[$key.'.option_d.required'] = "Option d field number ".($key+1)." is empty";
            $messagesError[$key.'.right_answer.required'] = "Right answer field number ".($key+1)." is empty";
        }

        $validator = Validator::make($import_data_filter, [
            '*.question' => 'required|distinct|unique:quiz_questions,question',
            '*.option_a' => 'required',
            '*.option_b' => 'required',
            '*.option_c' => 'required',
            '*.option_d' => 'required',
            '*.right_answer' => 'required',
        ], $messagesError);

        $get_error = [];
        foreach ($validator->errors()->messages() as $key => $value) {
            $get_error[] = $key;
        }
        $error = array_unique($get_error);
        $question = [];
        $count_error = 0;

        foreach ($import_data_filter as $key => $row) {
            if(in_array($key, $error)) 
            {
                continue;
                $count_error++;
            } else {
                $question[$key] = [
                    'quiz_id' => $quiz_id,
                    'question' => $row['question'],
                    'option_a' => $row['option_a'],
                    'option_b' => $row['option_b'],
                    'option_c' => $row['option_c'],
                    'option_d' => $row['option_d'],
                    'right_answer' => $row['right_answer'],
                ];
            }
        }

        $totalQuestionSuccess = count($question);
        foreach ($question as $key => $q) {
            QuizQuestion::create($q);
        }

        return redirect()->route('detail.kuis.soal', $quiz_id)->withErrors($validator)->with('totalQuestion',$totalQuestion)->with('totalQuestionSuccess',$totalQuestionSuccess);
    }

    public function exportSoal($quiz_id)
    {

        // return "ekspor";
        $data = Quiz::where('id',$quiz_id)->first();
        $soal = QuizQuestion::where('quiz_id',$quiz_id)->get();

        $collection = [];
        foreach ($soal as $key => $value) {
            $collection[$key] = [
                'id' => $value['id'],
                'question' => $value['question'],
                'a' => $value['option_a'],
                'b' => $value['option_b'],
                'c' => $value['option_c'],
                'd' => $value['option_d'],
                'right_answer' => $value['right_answer'],
            ];
        }

        // return $collection;
        return Excel::create('Ekspor Soal Kuis '.$data->title, function($excel) use ($collection)
        {
            $excel->sheet('Sheet 1', function($sheet) use ($collection)
            {
                $sheet->freezeFirstRow();
                $sheet->setStyle(array(
                    'font' => array(
                        'name' => 'Calibri',
                        'size' => 12,
                    )
                ));
                $sheet->setAutoSize(array(
                    'A','C','D','E','F','G',
                ));
                $sheet->setWidth(array(
                    'B' => 75,
                ));
                $sheet->cell('A1:G1', function($cell) {
                    $cell->setBackground('#ede185');
                    $cell->setFontWeight('bold');
                });
                $sheet->cell('A1', function($cell) {
                    $cell->setValue('NO');
                });
                $sheet->cell('B1', function($cell) {
                    $cell->setValue('PERTANYAAN');
                });
                $sheet->cell('C1', function($cell) {
                    $cell->setValue('OPSI A');
                });
                $sheet->cell('D1', function($cell) {
                    $cell->setValue('OPSI B');
                });
                $sheet->cell('E1', function($cell) {
                    $cell->setValue('OPSI C');
                });
                $sheet->cell('F1', function($cell) {
                    $cell->setValue('OPSI D');
                });
                $sheet->cell('G1', function($cell) {
                    $cell->setValue('KUNCI JAWABAN');
                });
                if(!empty($collection)) {
                    foreach ($collection as $key => $value) {
                        $i=$key+2;
                        $sheet->cell('A'.$i, $key+1);
                        $sheet->cell('B'.$i, $value['question']);
                        $sheet->cell('C'.$i, $value['a']);
                        $sheet->cell('D'.$i, $value['b']);
                        $sheet->cell('E'.$i, $value['c']);
                        $sheet->cell('F'.$i, $value['d']);
                        $sheet->cell('G'.$i, $value['right_answer']);
                    }
                }
            });
        })->download('xlsx');
    }
}
