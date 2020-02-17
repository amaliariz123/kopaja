<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
use \Yajra\Datatables\Datatables;

class DevelopersController extends Controller
{
	public function indexDev()
	{
		return view('setting.developer_index');
	}

    public function getData()
    {
    	$data = Developer::orderBy('created_at','desc')->get();

    	
    	return datatables()->of($data)->addColumn('option', function($row) {
            $btn = '<button type="button" id="detail-btn" class="btn btn-success m-btn m-btn--icon m-btn--icon-only"> <i class="la la-exclamation-circle"></i></button>';
                return $btn;
        })
        ->rawColumns(['option'])
        ->make(true);
    }
}
