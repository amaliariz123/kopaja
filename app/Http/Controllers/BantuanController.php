<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Help;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Input;
use Validator;
use Excel;

class BantuanController extends Controller
{

	/**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexBantuan()
    {
        $data = Help::all();

    	return view('setting.bantuan_index', compact('data'));
    }

    /**
     * Fetch data from model with datatables.
     * @return Response
     */
    public function getData()
    {
    	$data = Help::orderBy('created_at','desc')->get();
    	
    	return datatables()->of($data)->addColumn('option', function($row) {            
            $btn = '<button id="edit-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Edit"><i class="la la-pencil-square"></i></button>';
            $btn = $btn.'  <button id="delete-btn" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Delete"><i class="la la-trash"></i></button>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
    	return view('setting.bantuan_create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    	$validate = [
    		'question' => 'required',
    		'answer' => 'required',
    	];

    	$validator = Validator::make($request->all(), $validate);

    	if($validator->fails())
    	{
    		return response()->json(['errors' => $validator->errors()->all()]);
    	} else {
	    	Help::create([
	    		'question' => request('question'),
	    		'answer' => request('answer')
	    	]);
    	}

    	return response()->json(['success'=>'Data added successfully']);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
    	$data = Help::find($id);

    	return response()->json(['status' => 'OK', 'data' => $data], 200);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
    	$data = Help::find($id);

    	return response()->json(['status' => 'OK', 'data' => $data], 200);
        //return view('setting.bantuan_edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
    	$data = Help::find($id);

    	$validate = [
    		'edit_question' => 'required',
    		'edit_answer' => 'required',
    	];

    	$validator = Validator::make($request->all(), $validate);

    	if($validator->fails())
    	{
    		return response()->json(['errors' => $validator->errors()->all()]);
    	} else{
    		$data->question = $request->edit_question;
    		$data->answer = $request->edit_answer;
    		$data->save();

    		return response()->json(['success'=>'Data updated!']);
    	}
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function delete($id)
    {
    	$data = Help::find($id);
    	$data->delete();

    	return response()->json(['success'=>'Data deleted!']);
    }

    public function templateImport()
    {
        $path = 'template/Template Impor Bantuan.xlsx';
        return response()->download($path);
    }

    public function saveImportBantu(Request $request)
    {
        $data = Help::all();
        $this->validate(request(), ['excel' => 'required|mimes:xlsx']);

        $file = $request->file('excel');
        $import = Excel::load($file)->get();
        if(!$import) {
            session(['error' => ['Something wrong!']]);
            return redirect('/bantuan_aplikasi');
        }

        $import_data_filter = array_filter($import->toArray());
        foreach ($import_data_filter as $key => $value) {
            if(($check=array_search('Ini contoh pertanyaan?', $value)) !== false ) {
                unset($import_data_filter[$key]);
            } else {
                if(implode($value) == null) {
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
            $messagesError[$key.'.answer.required'] = "Answer field number ".($key+1)." is empty";
        }

        $validator = Validator::make($import_data_filter, [
            '*.question' => 'required|distinct|unique:helps,question',
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
            if(in_array($key, $error))  {
                continue;
                $count_error++;
            } else {
                $question[$key] = [
                    'question' => $row['question'],
                    'answer' => $row['answer'],
                ];
            }
        }

        $totalQuestionSuccess = count($question);
        foreach ($question as $key => $q) {
            Help::create($q);
        }

        return redirect('/bantuan_aplikasi')->with('data',$data)
                ->withErrors($validator)->with('totalQuestion',$totalQuestion)
                ->with('totalQuestionSuccess',$totalQuestionSuccess);
    }

    public function exportBantuan()
    {
        $data = Help::all();

        $collection = [];
        foreach ($data as $key => $value) {
            $collection[$key] = [
                'id' => $value['id'],
                'question' => $value['question'],
                'answer' => $value['answer'],
            ];
        }       
        return Excel::create('Ekspor Data Bantuan', function($excel) use ($collection) {
            $excel->sheet('Sheet 1', function($sheet) use ($collection) {
                $sheet->freezeFirstRow();
                $sheet->setStyle(array(
                    'font' => array(
                        'name' => 'Calibri',
                        'size' => 12,
                    )
                ));
                $sheet->setAutoSize(array(
                    'A',
                ));
                $sheet->setWidth(array(
                    'B' => 50,
                    'C' => 75,
                ));
                $sheet->cell('A1:C1', function($cell) {
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
                    $cell->setValue('JAWABAN');
                });
                
                if(!empty($collection)) {
                    foreach ($collection as $key => $value) {
                        $i=$key+2;
                        $sheet->cell('A'.$i, $key+1);
                        $sheet->cell('B'.$i, $value['question']);
                        $sheet->cell('C'.$i, $value['answer']);
                    }
                }
            });
        })->download('xlsx');
    }
}
