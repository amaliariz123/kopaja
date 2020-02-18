<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use \Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Validator;
use File;

class DevelopersController extends Controller
{

	 /**
     * Display a listing of the resource.
     * @return Response
     */
	public function indexDev()
	{
		return view('setting.developer_index');
	}

	 /**
     * Fetch data from model with datatables.
     * @return Response
     */
    public function getData()
    {
    	$data = Developer::orderBy('created_at','desc')->get();
    	
    	return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<button type="button" id="detail-btn" class="btn btn-info m-btn m-btn--icon m-btn--icon-only"> <i class="la la-exclamation-circle"></i></button>';
            $btn = $btn.'  <button id="edit-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only"><i class="la la-pencil-square"></i></button>';
            $btn = $btn.'  <button id="delete-btn" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only"><i class="la la-trash"></i></button>';

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
    	return view('setting.developer_create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    	$rules = [
    		'name' => 'required|max:50',
    		'email' => 'nullable',
    		'picture' => 'nullable|max:2048|mimes:png,jpg,jpeg',
    	];

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails())
    	{
    		return response()->json(['errors' => $validator->errors()->all()]);
    	} else {
    		if(!empty($request->picture))
    		{
    			$file = $request->file('picture');
    			$extensions = strtolower($file->getClientOriginalExtension());
    			$filename = $request->title.'.'.$extensions;
    			Storage::put('public/images/developers_team/'.$filename, File::get($file));    			
    		} else {
    			$filename = 'blank.jpg';
    		}
    	}
    	//store data to table developers_team
    		Developer::create([
    			'name' => request('name'),
    			'email' => request('email'),
    			'picture' => $filename
    		]);

    	//return view('setting.developer_index');
    	 return response()->json(['success'=>'Data added successfully']);
    }

     /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
     public function edit($name)
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
     public function delete($name)
     {

     }
}
