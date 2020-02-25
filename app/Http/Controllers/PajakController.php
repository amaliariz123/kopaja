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
    	return view('pajak.pajak_create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Show the specified resource.
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

     }
}
