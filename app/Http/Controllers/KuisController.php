<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\CourseQuestion;
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
    	$data = Course::all();

    	return view('kuis.kuis_index', compact('data'));
    }

    /**
     * Fetch data from model with datatables.
     * @return Response
     */
     public function getData()
     {
     	$data = Course::all();
        
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
	    	Course::create([
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
    	$data = Course::find($id);

    	return Image::make(Storage::get('public/images/kuis/'.$data->image))->response();
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
     public function edit($id)
     {
     	$data = Course::find($id);

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
     	$data = Course::find($id);

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
     	$data = Course::find($id);

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
     	$data = Course::find($id);
     	$soal = CourseQuestion::where('course_id','=',$id)->paginate(5);
     	$number = $soal->firstItem();

     	return view('kuis.kuis_detail', compact('data','soal','number'));
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
    	$data = Course::find($id);

    	return view('kuis.soal_create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
    */
    public function storeSoal(Request $request, $id)
    {
    	// return $request;
        $rules = [
            'course_id' => 'required|integer',
            'question' => 'required',
            'image' => 'nullable|max:2048|mimes:png,jpg,jpeg',
            'option_a' => 'required|string',
            'option_b' => 'required|string',
            'option_c' => 'required|string',
            'option_d' => 'required|string',
            'right_answer' => 'required|integer',
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

            CourseQuestion::create([
            'course_id' => request('id_tax'),
            'question' => request('question'),
            'option_a' => request('option_a'),
            'option_b' => request('option_b'),
            'option_c' => request('option_c'),
            'option_d' => request('option_d'),
            'right_answer' => request('right_answer'),
            'image' => $filename,
            ]);

            $course = Course::find($id);

            //return response()->json(['success'=>'Data added successfully']);
            session(['success' => ['Soal berhasil ditambahkan.']]);

            //return redirect()->route('');
            return redirect()->route('detail.kuis.soal', $id);
        }

	}
}
