<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Help;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Input;
use Validator;

class BantuanController extends Controller
{

	/**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexBantuan()
    {
    	return view('setting.bantuan_index');
    }

    /**
     * Fetch data from model with datatables.
     * @return Response
     */
    public function getData()
    {
    	$data = Help::orderBy('created_at','desc')->get();
    	
    	return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<button id="edit-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only"> <i class="la la-pencil-square"></i></button>';
            $btn = $btn.'  <button id="delete-btn" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only"><i class="la la-trash"></i></button>';
            $btn = $btn.'  <button id="detail-btn" class="btn btn-info m-btn m-btn--icon m-btn--icon-only"><i class="la la-exclamation-circle"></i></button>';

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
    		//store to table help
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

    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

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

    	return view('setting.bantuan_index');
    }
}
