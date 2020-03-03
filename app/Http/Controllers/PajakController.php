<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tax;
use Validator;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use File;


class PajakController extends Controller
{

	 /**
     * Display a listing of the resource.
     * @return Response
     */
    public function indexPajak()
    {
    	return view('pajak.pajak_index');
    }

    /**
     * Fetch data from model with datatables.
     * @return Response
     */
    public function getData()
    {
    	$data = Tax::orderBy('created_at','desc')->get();
    	
    	return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<button id="detail-btn" class="btn btn-info m-btn m-btn--icon m-btn--icon-only"   data-toggle="m-tooltip" data-placement="top" title="Detail"><i class="la la-exclamation-circle"></i></button>';
            $btn = $btn.'  <button id="edit-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Edit"><i class="la la-pencil-square"></i></button>';
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
    	return view('pajak.pajak_create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    	$rules = [
    		'name' => 'required',
    		'description' => 'required',
    		'tax_type' => 'required|in:Pajak pusat,Pajak daerah',
    		'module' => 'nullable|max:2048|mimetypes:application/pdf',
    	];

    	$validator = Validator::make($request->all(), $rules);

    	if($validator->fails())
    	{
    		return response()->json(['errors' => $rules->errors()->all()]);
    	} else {
    		if(!empty($request->module))
    		{
    			$file = $request->file('module'); //menyimpan data file yang diupload ke variabel $file
    			$pdf = strtolower($request->file('module')->getClientOriginalExtension()); //get file extension
    			$filename = $request->name.'.'.$pdf;
    			Storage::put('public/materi_pdf/'.$filename, File::get($file));
    		} else {
    			$filename = null;
    		}
    	}

    	//store data to table taxes
    	Tax::create([
    		'name' => request('name'),
    		'description' => request('description'),
    		'tax_type' => request('tax_type'),
    		'module' => $filename,
    	]);

    	//return $request['module'];
    	return response()->json(['success' => 'Data added successfully!']);
    }

    /**
     * Fetch pdf url from database.
     * @param int $id
     * @return File
     */
    public function getPdf($id)
    {
    	$pdf = Tax::find($id);

    	return File::make(Storage::get('public/materi_pdf/'.$pdf->module))->response();
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
    	$data = Tax::find($id);

    	return response()->json(['status' => 'OK', 'data' => $data], 200);
    }

     /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
     public function edit($id)
     {
     	$data = Tax::find($id);

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
     	$data =Tax::find($id);

     	$rules = [
     		'edit_name' => 'required',
    		'edit_description' => 'required',
    		'edit_tax_type' => 'required|in:Pajak pusat,Pajak daerah',
    		'edit_module' => 'nullable|max:2048|mimetypes:application/pdf',
     	];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
        {
            return response()->json(['errors' => $rules->errors()->all()]);
        } else {
            if(!empty($request->edit_module))
            {
                $file = $request->file('edit_module'); //menyimpan data file yang diupload ke variabel $file
                $pdf = strtolower($request->file('edit_module')->getClientOriginalExtension()); //get file extension
                $size = $request->file('edit_module')->getSize(); //get file size
                if($size >= 2000000)
                {
                    DB::rollback();
                    return response()->json(['errors' => 'Fie size too large. Maximum file size : 2MB.']);
                }
                $filename = $request->name.'.'.$pdf;
                Storage::put('public/materi_pdf/'.$filename, File::get($file));
            } else {
                $filename = null;
            }

            $data->name=$request->edit_name;
            $data->description=$request->edit_description;
            $data->tax_type=$request->edit_tax_type;
            $data->module=$filename;
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
     	$data = Tax::find($id);
     	Storage::delete('public/materi_pdf/'.$data->module);
     	$data->delete();

     	return response()->json(['success' => 'Data deleted!']);
     }
}
