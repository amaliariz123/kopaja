<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExampleExercise;
use App\Models\ExerciseQuestion;
use App\Models\Tax;
use App\Models\MemberExercise;
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


class SettingSoalController extends Controller
{
	/**************************
    ###### Contoh Soal #######
    **************************/

	/**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexContohSoal()
    {
    	$tax = Tax::all()->pluck('name','id');

    	return view('setting_soal.contoh_soal_index', compact('tax'));
    }

     /**
     * Fetch data from model with datatables.
     * @return Response
     */
     public function getDataContoh()
     {
     	$pajak = Tax::all();
        
        $data = [];
        for ($i=0; $i <count($pajak) ; $i++) { 
            $data_pajak['id'] = $pajak[$i]->id;
            $data_pajak['id_tax'] = $pajak[$i]->name;
            $data_pajak['question_total'] = count( $latihan = DB::table('example_exercises')
                                                            ->where('id_tax','=',$data_pajak['id'])
                                                            ->get()
                                                );
           $data[] = $data_pajak;
        }

        //return $data;

        return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<a href="'.url('/contoh_soal/show/'.$row['id']).'/'.$row['id_tax'].'" class="btn m-btn--pill btn-info m-btn--wide btn-sm"> <i class="la la-exclamation-circle"></i> &nbsp; Detail</a>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
     }

    public function createContoh($id,$tax_name)
    {
        $tax = Tax::find($id);

        return view('setting_soal.contoh_soal_create', compact('tax'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
    */
    public function storeContoh(Request $request)
    {
        // return $request;
    	$rules = [
    		'id_tax' => 'required|integer',
    		'title' => 'required|string',
    		'question_text' => 'required',
    		'question_image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
    		'answer_text' => 'required_without:answer_image',
    		'answer_image' => 'required_without:answer_text|max:2048|mimes:png,jpg,jpeg'
    	];

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails())
    	{
            session(['error' => $validator->errors()->all()]);

    		return back()->withInput();
    	} else {

    		//if both field not null
    		if(!empty($request->question_image && !empty($request->answer_image)))
    		{
    			$file1 = $request->file('question_image');
    			$file2 = $request->file('answer_image');

    			$extension1 = strtolower(request('question_image')->getClientOriginalExtension());
    			$extension2 = strtolower(request('answer_image')->getClientOriginalExtension());

    			$date = date('YmdHi');

    			$question_image = 'question_image_'.$date.'.'.$extension1;
    			$answer_image = 'answer_image_'.$date.'.'.$extension2;

    			Storage::put('public/images/contoh_soal_image/'.$question_image, File::get($file1));
    			Storage::put('public/images/contoh_soal_image/'.$answer_image, File::get($file2));
    		} elseif(!empty($request->question_image) && empty($request->answer_image)) 
    		//if field question_image is not null BUT field answer_image is null
    		{
    			$file1 = $request->file('question_image');
    			$extensions1 = strtolower(request('question_image')->getClientOriginalExtension());
    			$date = date('YmdHi');
    			$question_image = 'question_image_'.$date.'.'.$extensions1;
    			$answer_image = 'blank.jpg';
    			Storage::put('public/images/contoh_soal_image/'.$question_image, File::get($file1));
    		} elseif(empty($request->question_image) && !empty($request->answer_image)) 
    		//if field question_image is null BUT field answer_image is not null
    		{
    			$file2 = $request->file('answer_image');
    			$extensions2 = strtolower(request('answer_image')->getClientOriginalExtension());
    			$date = date('YmdHi');
    			$question_image = 'blank.jpg';
    			$answer_image = 'answer_image_'.$date.'.'.$extensions2;
    			Storage::put('public/images/contoh_soal_image/'.$answer_image, File::get($file2));
    		} else{ //if both field is null
    			$question_image = null;
    			$answer_image = null;
    		} 
    	}

    	ExampleExercise::create([
    		'id_tax' => request('id_tax'),
    		'title' => request('title'),
    		'question_text' => request('question_text'),
    		'question_image' => $question_image,
    		'answer_text' => request('answer_text'),
    		'answer_image' => $answer_image,
    	]);

        $pajak = Tax::find($request->id_tax);

    	// return response()->json(['success'=>'Data added successfully']);
        session(['success' => ['Soal berhasil ditambahkan!']]);
        return redirect()->route('detail.contoh_soal', [$request->id_tax, $pajak->name]);
    }

     /**
     * Show specified resource.
     * @param int $id
     * @return Response
     */
     public function showContoh($id,$tax_name)
     {
        $tax = Tax::find($id);
        $questions = ExampleExercise::where('id_tax','=',$id)->paginate(5);
        $number = $questions->firstItem();
        $total_question = DB::table('example_exercises')->where('id_tax','=',$id)->get();

        return view('setting_soal.contoh_soal_detail', compact('tax','questions','number','total_question'));
     }

     /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
     public function editContoh($id_soal,$nama_pajak)
     {
     	$contoh = ExampleExercise::find($id_soal);
        $tax = Tax::find($contoh->id_tax);

        return view('setting_soal.contoh_soal_edit', compact('contoh', 'tax'));
     }

     /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
     public function updateContoh(Request $request, $id)
     {

        // return $request;
     	$data = ExampleExercise::find($id);
        $pajak = Tax::where('id',$data->id_tax)->first();
        // return $pajak->name;

     	$rules = [
     		'edit_id_tax' => 'required|integer',
    		'edit_title' => 'required|string',
    		'edit_question_text' => 'required',
    		'edit_question_image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
    		'edit_answer_text' => 'required_without:edit_answer_image',
    		'edit_answer_image' => 'required_without:edit_answer_text|max:2048|mimes:png,jpg,jpeg'
     	];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            session(['error' => $validator->errors()->all()]);
            return back()->withInput();
            
        } else {
            //if both field not null
            if(!empty($request->edit_question_image && !empty($request->edit_answer_image)))
            {
                $file1 = $request->file('edit_question_image');
                $file2 = $request->file('edit_answer_image');

                $extensions1 = strtolower(request('edit_question_image')->getClientOriginalExtension());
                $extensions2 = strtolower(request('edit_answer_image')->getClientOriginalExtension());

                $date = date('YmdHi');

                $question_image = 'question_image_'.$date.'.'.$extensions1;
                $answer_image = 'answer_image_'.$date.'.'.$extensions2;

                Storage::delete('public/images/contoh_soal_image/' . $data->question_image);
                Storage::delete('public/images/contoh_soal_image/' . $data->answer_image);

                Storage::put('public/images/contoh_soal_image/'.$question_image, File::get($file1));
                Storage::put('public/images/contoh_soal_image/'.$answer_image, File::get($file2));
            } elseif(!empty($request->edit_question_image) && empty($request->edit_answer_image)) 
            //if field question_image is not null BUT field answer_image is null
            {
                $file1 = $request->file('edit_question_image');
                $extensions1 = strtolower(request('edit_question_image')->getClientOriginalExtension());
                $date = date('YmdHi');
                $question_image = 'question_image_'.$date.'.'.$extensions1;
                $answer_image = 'blank.jpg';
                Storage::delete('public/images/contoh_soal_image/' . $data->question_image);
                Storage::put('public/images/contoh_soal_image/'.$question_image, File::get($file1));
            } elseif(empty($request->edit_question_image) && !empty($request->edit_answer_image)) 
            //if field question_image is null BUT field answer_image is not null
            {
                $file2 = $request->file('edit_answer_image');
                $extensions2 = strtolower(request('answer_image')->getClientOriginalExtension());
                $date = date('YmdHi');
                $question_image = 'blank.jpg';
                $answer_image = 'answer_image_'.$date.'.'.$extensions2;
                Storage::delete('public/images/contoh_soal_image/' . $data->answer_image);
                Storage::put('public/images/contoh_soal_image/'.$answer_image, File::get($file2));
            } else{ //if both field is null
                $question_image = $data->question_image;
                $answer_image = $data->answer_image;
            } 

            $data->id_tax = $request->edit_id_tax;
            $data->title = $request->edit_title;
            $data->question_text = $request->edit_question_text;
            $data->question_image= $question_image;
            $data->answer_text = $request->edit_answer_text;
            $data->answer_image = $answer_image;
            $data->save();

            //return response()->json(['success' => 'Data updated!']);
            session(['success' => ['Data berhasil diperbarui!']]);
            return redirect()->route('detail.contoh_soal', [$id,$pajak->name]);
        }
     } 

    public function searchSoal(Request $request,$id)
    {
        if($request->ajax())
        {
            $tax = Tax::where('id',$id)->first();
            $query = $request->get('query');
            $query = str_replace(" ","%",$query);
            $questions = ExampleExercise::where('id_tax',$tax->id)
                        ->where('question_text','like','%'.$query.'%')
                        ->orWhere('title','like','%'.$query.'%')
                        ->paginate(5);
            $number = $questions->firstItem();
        }

        return view('setting_soal.contoh_soal_persoal', compact('tax','questions','number'))->render();
    }

     /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
     public function deleteContoh($id)
     {
     	$data = ExampleExercise::find($id);

     	Storage::delete('public/images/contoh_soal_image/'.$data->question_image);
     	Storage::delete('public/images/contoh_soal_image/'.$data->answer_image);
     	$data->delete();

     	return response()->json(['success' => 'Data deleted successfully']);
     }

     public function downloadTemplateContoh()
    {
        $path = 'template/Template Impor Contoh Soal.xlsx';
        return response()->download($path);
    }

    public function saveImportSoal(Request $request, $id)
    {
        $this->validate(request(),
            [
                'excel' => 'required|mimes:xlsx'
            ]
        );

        $data = Tax::find($id);
        

        $file = $request->file('excel');
        $import = Excel::load($file)->get();
        if(!$import)
        {
            session(['error' => ['Something wrong!']]);
            return redirect()->route('detail.contoh_soal', [$id, $tax_name]);
        }

        $import_data_filter = array_filter($import->toArray());
        foreach ($import_data_filter as $key => $value) {
            if(($check=array_search('Untuk kendaraan roda 2 berjenis matic milik orang pribadi dengan NJKB sebesar Rp9.600.000,- Hitunglah biaya untuk bea balik nama yang harus dibayarkan!', $value)) === true ) 
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
            $messagesError[$key.'.title.required'] = "Title field number ".($key+1)." is empty";
            $messagesError[$key.'.title.distinct'] = "Title field number ".($key+1)." has duplicate value";
            $messagesError[$key.'.title.unique'] = "Title field number ".($key+1)." has already been taken";
            $messagesError[$key.'.question.required'] = "Question field number ".($key+1)." is empty";
            $messagesError[$key.'.question.distinct'] = "Question field number ".($key+1)." has duplicate value";
            $messagesError[$key.'.question.unique'] = "Question field number ".($key+1)." has already been taken";
            $messagesError[$key.'.answer.required'] = "Answer a field number ".($key+1)." is empty";
        }

        $validator = Validator::make($import_data_filter, [
            '*.title' => 'required|distinct|unique:example_exercises,title',
            '*.question' => 'required|distinct|unique:example_exercises,question_text',
            '*.answer' => 'required',
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
                    'id_tax' => $id,
                    'title' => $row['title'],
                    'question_text' => $row['question'],
                    'answer_text' => $row['answer'],
                ];
            }
        }

        $totalQuestionSuccess = count($question);
        foreach ($question as $key => $q) {
            ExampleExercise::create($q);
        }

        return redirect()->route('detail.contoh_soal', [$id, $data->name])->withErrors($validator)->with('totalQuestion',$totalQuestion)->with('totalQuestionSuccess',$totalQuestionSuccess);
    }

    public function exportContohSoal($id)
    {
        $tax = Tax::where('id',$id)->first();
        $question = ExampleExercise::where('id_tax',$id)->get();

        $collection = [];
        foreach ($question as $key => $value) {
            $collection[$key] = [
                'id' => $value['id'],
                'title' => $value['title'],
                'question_text' => $value['question_text'],
                'answer_text' => $value['answer_text'],
            ];
        }

        // return $collection;
        return Excel::create('Ekspor Contoh Soal '.$tax->name, function($excel) use ($collection)
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
                    'A','B','C','D',
                ));
                $sheet->cell('A1:D1', function($cell) {
                    $cell->setBackground('#ede185');
                    $cell->setFontWeight('bold');
                });
                $sheet->cell('A1', function($cell) {
                    $cell->setValue('NO');
                });
                $sheet->cell('B1', function($cell) {
                    $cell->setValue('JUDUL');
                });
                $sheet->cell('C1', function($cell) {
                    $cell->setValue('SOAL');
                });
                $sheet->cell('D1', function($cell) {
                    $cell->setValue('PENYELESAIAN');
                });
                
                if(!empty($collection)) {
                    foreach ($collection as $key => $value) {
                        $i=$key+2;
                        $sheet->cell('A'.$i, $key+1);
                        $sheet->cell('B'.$i, $value['title']);
                        $sheet->cell('C'.$i, $value['question_text']);
                        $sheet->cell('D'.$i, $value['answer_text']);
                    }
                }
            });
        })->download('xlsx');
    }


    /************************************
    ########## LATIHAN SOAL #############
    *************************************/

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexLatihanSoal()
    {
        $tax = Tax::all()->pluck('name','id');

    	return view('setting_soal.latihan_soal_index', compact('tax'));
    }

    /**
     * Fetch data from model with datatables.
     * @return Response
     */
    public function getDataLatihan()
    {
        $pajak = Tax::all();
        //$latihan = ExerciseQuestion::with('tax')->where('id_tax','=','id')->get();
        
        $data = [];
        for ($i=0; $i <count($pajak) ; $i++) { 
            $data_pajak['id'] = $pajak[$i]->id;
            $data_pajak['id_tax'] = $pajak[$i]->name;
            $data_pajak['question_total'] = count( $latihan = DB::table('exercise_questions')
                                                            ->where('id_tax','=',$data_pajak['id'])
                                                            ->get()
                                                );
           $data[] = $data_pajak;
        }

        //return $data;

        return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<a href="'.url('latihan_soal/show/'.$row['id']).'/'.$row['id_tax'].'" class="btn m-btn--pill btn-info m-btn--wide btn-sm"> <i class="la la-exclamation-circle"></i> &nbsp; Detail</a>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);

    }

    /**
     * Show specified resource.
     * @param int $id
     * @return Response
     */
    public function showLatihan($id, $nama_pajak)
    {
        $tax = Tax::find($id);
        $questions = ExerciseQuestion::where('id_tax','=',$id)->paginate(5);
        $number = $questions->firstItem();
        $total_question = DB::table('exercise_questions')->where('id_tax','=',$id)->get();

        return view('setting_soal.latihan_soal_detail', compact('tax','questions','number','total_question'));
    }

    public function search(Request $request, $id)
    {
        if($request->ajax())
        {
            $tax = Tax::where('id',$id)->first();
            $query = $request->get('query');
            $query = str_replace(" ","%",$query);
            $questions = ExerciseQuestion::where('id_tax',$tax->id)->where('question','like','%'.$query.'%')->paginate(5);
            $number = $questions->firstItem();
        }

        return view('setting_soal.latihan_soal_persoal', compact('tax','questions','number'))->render();
    }

    /**
    * Show the form for creating a new resource.
    * @return Response
    */
    public function createSoal($id, $nama_pajak)
    {
        $tax = Tax::find($id);

        return view('setting_soal.latihan_soal_create', compact('tax'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
    */
    public function storeSoal(Request $request)
    {
        // return $request;
        $rules = [
            'id_tax' => 'required|integer',
            'question' => 'required',
            'image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
            'opsi_a' => 'required|string',
            'opsi_b' => 'required|string',
            'opsi_c' => 'required|string',
            'opsi_d' => 'required|string',
            'jawaban' => 'required|integer',
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            //return response()->json(['errors' => $validator->errors()->all()]);
            session(['error' => $validator->errors()->all()]);

            return back()->withInput($request);

        } else {
            if(!empty($request->image))
            {
                $file = $request->file('image');
                $extensions = strtolower($file->getClientOriginalExtension());
                $date = date('YmdHi');
                $filename = 'image_'.$date.'.'.$extensions;
                Storage::put('public/images/latihan_soal_image/'.$filename, File::get($file));
            } else {
                $filename = null;
            }

            ExerciseQuestion::create([
            'id_tax' => request('id_tax'),
            'question' => request('question'),
            'option_a' => request('opsi_a'),
            'option_b' => request('opsi_b'),
            'option_c' => request('opsi_c'),
            'option_d' => request('opsi_d'),
            'right_answer' => request('jawaban'),
            'image' => $filename,
            ]);

            $pajak = Tax::find($request->id_tax);

            //return response()->json(['success'=>'Data added successfully']);
            session(['success' => ['Soal berhasil ditambahkan.']]);

            //return redirect()->route('');
            return redirect()->route('detail.soal', [$request->id_tax, $pajak->name]);
        }
    }

    public function editSoal($id_soal, $nama_pajak)
    {
        $latihan = ExerciseQuestion::find($id_soal);
        $tax = Tax::find($latihan->id_tax);

        return view('setting_soal.latihan_soal_edit', compact('latihan', 'tax'));
    }

    public function updateSoal(Request $request, $id)
    {
        $latihan = ExerciseQuestion::find($id);

        $rules = [
            'id_tax' => 'required|integer',
            'question' => 'required',
            'image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
            'opsi_a' => 'required|string',
            'opsi_b' => 'required|string',
            'opsi_c' => 'required|string',
            'opsi_d' => 'required|string',
            'jawaban' => 'required|integer',
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
                $filename = 'image_'.$date.'.'.$extensions;
                Storage::delete('public/images/latihan_soal_image/' . $latihan->image);
                Storage::put('public/images/latihan_soal_image/'.$filename, File::get($file));
            } else {
                $filename = $latihan->image;
            }
        }
            $latihan->id_tax = $request->id_tax;
            $latihan->question = $request->question;
            $latihan->image = $filename;
            $latihan->option_a = $request->opsi_a;
            $latihan->option_b = $request->opsi_b;
            $latihan->option_c = $request->opsi_c;
            $latihan->option_d = $request->opsi_d;
            $latihan->right_answer = $request->jawaban;
            $latihan->save();

            session(['success' => ['Soal berhasil diperbarui!']]);

            $pajak = Tax::find($request->id_tax);

            return redirect()->route('detail.soal', [$request->id_tax, $pajak->name]);
    }

    public function deleteSoal($id)
    {
        $data = ExerciseQuestion::find($id);
        Storage::delete('public/images/latihan_soal/'.$data->image);
        $data->delete();

        return response()->json(['success' => 'Data deleted successfully']);
    }

    public function saveImport(Request $request, $id)
    {
        $this->validate(request(),
            [
                'excel' => 'required|mimes:xlsx'
            ]
        );

        $data = Tax::find($id);
        

        $file = $request->file('excel');
        $import = Excel::load($file)->get();
        if(!$import)
        {
            session(['error' => ['Something wrong!']]);
            return redirect()->route('detail.soal', [$id, $tax_name]);
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
            '*.question' => 'required|distinct|unique:exercise_questions,question',
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
                    'id_tax' => $id,
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
            ExerciseQuestion::create($q);
        }

        return redirect()->route('detail.soal', [$id, $data->name])->withErrors($validator)->with('totalQuestion',$totalQuestion)->with('totalQuestionSuccess',$totalQuestionSuccess);
    }

    public function downloadTemplate()
    {
        $path = 'template/Template Impor Latihan Soal.xlsx';
        return response()->download($path);
    }

    public function exportSoal($id)
    {
        $tax = Tax::where('id',$id)->first();
        $question = ExerciseQuestion::where('id_tax',$id)->get();

        $collection = [];
        foreach ($question as $key => $value) {
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
        return Excel::create('Ekspor Latihan Soal '.$tax->name, function($excel) use ($collection)
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

    public function showResult($id)
    {
        $data = Tax::find($id);
       
        return view('setting_soal.latihan_soal_result', compact('data'));
        //return "hello";
    }

    public function resultLatihan($tax_id)
    {
        $result = DB::table('member_exercises')
                    ->join('members','members.id','=','member_exercises.member_id')
                    ->join('users','users.id','=','members.user_id')
                    ->join('member_exercise_answers','member_exercise_answers.member_id','=','members.id')
                    ->join('exercise_questions','exercise_questions.id','=','member_exercise_answers.question_id')
                    ->select('members.id as member_id','users.fullname as member_name','members.institution as member_institution','member_exercises.score as total_score','member_exercises.created_at as exercise_time','member_exercises.tax_id as tax_id')
                    ->where([['member_exercises.tax_id',$tax_id],['exercise_questions.id_tax',$tax_id]])
                    ->orderBy('members.id','asc')
                    ->distinct()
                    ->get();

        return datatables()->of($result)->addColumn('option', function($row) {
            $btn = '<a href="'.url('latihan_soal/'.$row->tax_id).'/member/'.$row->member_id.'" class="btn m-btn--pill btn-info m-btn--wide btn-sm"> <i class="la la-exclamation-circle"></i> &nbsp; Detail</a>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
    }


    public function showAnswer($id,$member_id)
    {
        $this->data['total_score'] = DB::table('member_exercises')
                                    ->join('members','members.id','=','member_exercises.member_id')
                                    ->join('users','users.id','=','members.user_id')
                                    ->select('members.id as member_id','users.fullname as member_name','members.institution as member_institution','member_exercises.score as member_score')
                                    ->where([['tax_id', $id],['member_id', $member_id]])
                                    ->get();
        $this->data['exercise'] = DB::table('taxes')
                                ->select('taxes.name as tax_name')
                                ->where('taxes.id','=',$id)
                                ->get();
        $this->data['right_answer'] = DB::table('member_exercise_answers')
                                    ->join('exercise_questions','exercise_questions.id','=','member_exercise_answers.question_id')
                                    ->where([['exercise_questions.id_tax',$id],['member_exercise_answers.isRight',1],['member_exercise_answers.member_id',$member_id]])
                                    ->count('isRight');
        $this->data['wrong_answer'] = DB::table('member_exercise_answers')
                                    ->join('exercise_questions','exercise_questions.id','=','member_exercise_answers.question_id')
                                    ->where([['exercise_questions.id_tax',$id],['member_exercise_answers.isRight',0],['member_exercise_answers.member_id',$member_id]])
                                    ->whereNotNull('answer')
                                    ->count('isRight');
        $this->data['not_answered'] = DB::table('member_exercise_answers')
                                    ->join('exercise_questions','exercise_questions.id','=','member_exercise_answers.question_id')
                                    ->where([['exercise_questions.id_tax',$id],['member_exercise_answers.member_id',$member_id]])
                                    ->whereNull('answer')
                                    ->count();
        $this->data['question'] = DB::table('exercise_questions')
                                    ->join('member_exercise_answers','member_exercise_answers.question_id','=','exercise_questions.id')
                                    ->select('exercise_questions.id as question_id','exercise_questions.question as question','exercise_questions.option_a as option_a','exercise_questions.option_b as option_b','exercise_questions.option_c as option_c', 'exercise_questions.option_d as option_d','exercise_questions.image as image','exercise_questions.right_answer as right_answer','member_exercise_answers.answer as member_answer')
                                    ->where([['exercise_questions.id_tax',$id],['member_exercise_answers.member_id',$member_id]])
                                    ->groupBy('exercise_questions.id')
                                    ->paginate(5);
        $this->data['percentage'] = DB::table('member_exercise_answers')
                                ->join('exercise_questions','exercise_questions.id','=','member_exercise_answers.question_id')
                                ->select('question_id',DB::raw('sum(isRight)/count(member_id)*100 as percentage'))
                                ->where('exercise_questions.id_tax',$id)
                                ->groupBy('exercise_questions.id')
                                ->get();

        return view('setting_soal.latihan_soal_answer',$this->data, compact('id','member_id'));
           //return $this->data;
    }

}
