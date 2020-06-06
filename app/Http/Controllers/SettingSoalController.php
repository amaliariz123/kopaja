<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExampleExercise;
use App\Models\ExerciseQuestion;
use App\Models\Tax;
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
use App\Imports\ExerciseQuestionImport;

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
     	$example = ExampleExercise::with('tax')->orderByDesc('created_at')->get();

     	$data_example = [];
     	for($i=0; $i<count($example) ;$i++)
     	{
     		$data['id'] = $example[$i]->id;
            $data['id_pajak'] = $example[$i]->tax->id;
     		$data['id_tax'] = $example[$i]->tax->name;
     		$data['title'] = $example[$i]->title;
     		$data['question_text'] = $example[$i]->question_text;
     		$data['question_image'] = $example[$i]->question_image;
     		$data['answer_text'] = $example[$i]->answer_text;
     		$data['answer_image'] = $example[$i]->answer_image;

     		$data_example[] = $data;
     	}

     	return datatables()->of($data_example)->addColumn('option', function($row) {
            $btn = '<button id="detail-btn" class="btn btn-info m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Detail"> <i class="la la-exclamation-circle"></i></button>';
            $btn = $btn.'  <button id="edit-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Edit"><i class="la la-pencil-square"></i></button>';
            $btn = $btn.'  <button id="delete-btn" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Delete"><i class="la la-trash"></i></button>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);

     	//return response()->json($data_example);
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
    		return response()->json(['errors' => $validator->errors()->all()]);
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
    			$question_image = 'blank.jpg';
    			$answer_image = 'blank.jpg';
    		} 
    	}

    	$result = ExampleExercise::create([
    		'id_tax' => request('id_tax'),
    		'title' => request('title'),
    		'question_text' => request('question_text'),
    		'question_image' => $question_image,
    		'answer_text' => request('answer_text'),
    		'answer_image' => $answer_image,
    	]);

    	return response()->json(['success'=>'Data added successfully']);
    }

    /**
     * Fetch question_image url from table.
     * @param int $id
     * @return Image
     */
     public function getQuestionImage($id)
     {
     	$data = ExampleExercise::find($id);

     	return Image::make(Storage::get('public/images/contoh_soal_image/'.$data->question_image))->response();
     }

     /**
     * Fetch answer_image url from table.
     * @param int $id
     * @return Image
     */
     public function getAnswerImage($id)
     {
        $data = ExampleExercise::find($id);

        return Image::make(Storage::get('public/images/contoh_soal_image/'.$data->answer_image))->response();
     }

     /**
     * Show specified resource.
     * @param int $id
     * @return Response
     */
     public function showContoh($id)
     {
     	$example = ExampleExercise::with('tax')->find($id);

     	 	$data = [];
     	
     		$arr['id'] = $example->id;
     		$arr['id_tax'] = $example->tax->name;
     		$arr['title'] = $example->title;
     		$arr['question_text'] = $example->question_text;
     		$arr['question_image'] = $example->question_image;
     		$arr['answer_text'] = $example->answer_text;
     		$arr['answer_image'] = $example->answer_image;
            $arr['created_at'] = $example->created_at;
            $arr['updated_at'] = $example->updated_at;

     		$data[] = $arr;

     	return response()->json(['status'=>'OK', 'data' => $data], 200);
     }

     /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
     public function editContoh($id)
     {
     	$data = ExampleExercise::find($id);
     	//$tax = Tax::all()->pluck('name','id');

     	return response()->json(['status' => 'OK', 'data' => $data], 200);
        //return view('setting_soal.contoh_soal_edit')->compact('data', $data);
     }

     /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
     public function updateContoh(Request $request, $id)
     {
     	$data = ExampleExercise::find($id);

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
            return $validator->errors()->all();
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

            return response()->json(['success' => 'Data updated!']);
        }
     } 

     /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
     public function deleteContoh($id)
     {
     	$data = ExampleExercise::find($id);
     	$tax = Tax::all()->pluck('name','id');

     	Storage::delete('public/images/contoh_soal_image/'.$data->question_image);
     	Storage::delete('public/images/contoh_soal_image/'.$data->answer_image);
     	$data->delete();

     	return view('setting_soal.contoh_soal_index', compact('tax'));
     }


    /**************************
    ###### Latihan Soal #######
    **************************/

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

            return back()->withInput();

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
            session(['error' => 'Something wrong!']);
            return redirect()->route('detail.soal', [$id, $tax_name]);
        }

        $import_data_filter = array_filter($import->toArray());
        foreach ($import_data_filter as $key => $value) {
            if(($check=array_search('Berapa besarnya tarif PPh Pasal 22 atas pembelian barang oleh bendahara pemerintah dan KPA?', $value)) !== false ) 
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
        $path = 'template/Template Impor Soal.xlsx';
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

}
