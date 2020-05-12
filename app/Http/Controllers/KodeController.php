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

    public function generateCode(Request $request)
    {
    	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$total_code = $request->jumlah_kode;
    	$input_length = strlen($permitted_chars);
    	$string = "";
    	$code = "";

    	for ($j=0; $j < $total_code; $j++) { 
    		
	    	for($i=0;$i<20;$i++)
	    	{
	    		$random_character = $permitted_chars[mt_rand(0, $input_length-1)];
	    		$string .= $random_character;
	    	}

	    	if(strlen($string) > 20) {
		    	$code = substr($string, 0, 20);
		    	echo $code . "<br>";
		   	}
    	}
    }
}


// PremiumCode::create([
// 	'code' => $code,
// 	'status' => 'inactive'
// ]);
