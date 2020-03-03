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
     	$data = ExampleExercise::with('taxes')->orderByDesc('created_at')->get();

     	return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<button id="detail-btn" class="btn btn-info m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Detail"> <i class="la la-exclamation-circle"></i></button>';
            $btn = $btn.'  <button id="edit-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Edit"><i class="la la-pencil-square"></i></button>';
            $btn = $btn.'  <button id="delete-btn" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Delete"><i class="la la-trash"></i></button>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);

     	//return $data;
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
    		if(!empty($request->question_image) || !empty($request->answer_image))
    		{
    			$file1 = $request->file($request->question_image);
    			$file2 = $request->file($request->answer_image);

    			$extensions1 = strtolower(request('question_image')->getClientOriginalExtension());
    			$extensions2 = strtolower(request('answer_image')->getClientOriginalExtension());

    			$date = date('YmdHis');

    			$question_image = 'question_image'.$date.'.'.$extensions1;
    			$answer_image = 'answer_image'.$date.'.'.$extensions2;

    			//Storage::put('public/images/developers_team/'.$filename, File::get($file));
    			Storage::put('public/images/contoh_soal_image/'.$question_image, File::get($file1));
    			Storage::put('public/images/contoh_soal_image/'.$answer_image, File::get($file2));
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

    	return $result;
    }

     /**
     * Show specified resource.
     * @param int $id
     * @return Response
     */
     public function show($id)
     {

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
