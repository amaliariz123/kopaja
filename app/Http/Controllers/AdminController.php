<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Validator;
use File;

class AdminController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

	/**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(){
        return view('dashboard');
    }


    /**
     * Fetch data from model with datatables.
     * @return Response
     */
    public function getData()
    {

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit()
    {
        return view('users.admin_edit');
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
