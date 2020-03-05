<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExampleExercise;
use App\Models\Tax;
use \Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Validator;
use File;
use Illuminate\Validation\Rule;

class SettingSoalController extends Controller
{
	/*Contoh Soal*/

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
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
    	return view('setting_soal.contoh_soal_create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
    */
    public function store(Request $request)
    {
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
    		return $validator->errors()->all();
    	} else {

    		//if both field not null
    		if(!empty($request->question_image && !empty($request->answer_image)))
    		{
    			$file1 = $request->file($request->question_image);
    			$file2 = $request->file($request->answer_image);

    			$extensions1 = strtolower(request('question_image')->getClientOriginalExtension());
    			$extensions2 = strtolower(request('answer_image')->getClientOriginalExtension());

    			$date = date('YmdHi');

    			$question_image = 'question_image_'.$date.'.'.$extensions1;
    			$answer_image = 'answer_image_'.$date.'.'.$extensions2;

    			Storage::put('public/images/contoh_soal_image/'.$question_image, $file1);
    			Storage::put('public/images/contoh_soal_image/'.$answer_image, $file2);
    		} elseif(!empty($request->question_image) && empty($request->answer_image)) 
    		//if field question_image is not null BUT field answer_image is null
    		{
    			$file1 = $request->file($request->question_image);
    			$extensions1 = strtolower(request('question_image')->getClientOriginalExtension());
    			$date = date('YmdHi');
    			$question_image = 'question_image_'.$date.'.'.$extensions1;
    			$answer_image = 'blank.jpg';
    			Storage::put('public/images/contoh_soal_image/'.$question_image, $file1);
    		} elseif(empty($request->question_image) && !empty($request->answer_image)) 
    		//if field question_image is null BUT field answer_image is not null
    		{
    			$file2 = $request->file($request->answer_image);
    			$extensions2 = strtolower(request('answer_image')->getClientOriginalExtension());
    			$date = date('YmdHi');
    			$question_image = 'blank.jpg';
    			$answer_image = 'answer_image_'.$date.'.'.$extensions2;
    			Storage::put('public/images/contoh_soal_image/'.$answer_image, $file2);
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

    	//return $result;
    	return response()->json(['success'=>'Data added successfully']);
    }

     /**
     * Show specified resource.
     * @param int $id
     * @return Response
     */
     public function show($id)
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

     		$data[] = $arr;

     	return response()->json(['status'=>'OK', 'data' => $data], 200);
     }

     /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
     public function edit($id)
     {

     }

     /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
     public function update(Request $request)
     {

     }

     /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
     public function delete($id)
     {
     	$data = ExampleExercise::find($id);
     	$tax = Tax::all()->pluck('name','id');

     	Storage::delete('public/images/contoh_soal_image/'.$data->question_image);
     	Storage::delete('public/images/contoh_soal_image/'.$data->answer_image);
     	$data->delete();

     	return view('setting_soal.contoh_soal_index', compact('tax'));
     }



    /*Latihan Soal */

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexLatihanSoal()
    {
    	return view('setting_soal.latihan_soal_index');
    }
}
