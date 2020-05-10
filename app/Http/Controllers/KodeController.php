<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use App\Models\PremiumCode;


class KodeController extends Controller
{
    public function indexKode()
    {
    	return view('setting.kode_index');
    }

    public function getData()
    {
    	$data = PremiumCode::orderByDesc("created_at")->get();
    	
    	return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<button id="detail-btn" class="btn btn-info m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Detail"> <i class="la la-exclamation-circle"></i></button>';
            $btn = $btn.'  <button id="edit-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Edit"><i class="la la-pencil-square"></i></button>';
            $btn = $btn.'  <button id="delete-btn" class="btn btn-danger m-btn m-btn--icon m-btn--icon-only" data-toggle="tooltip" data-placement="top" title="Delete"><i class="la la-trash"></i></button>';

                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
    }
}
