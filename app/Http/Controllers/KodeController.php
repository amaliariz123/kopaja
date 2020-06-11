<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use App\Models\PremiumCode;
use App\Models\Member;
use Validator;


class KodeController extends Controller
{

    public function indexKode()
    {
    	return view('setting.kode_index');
    }

    public function getData()
    {
    	$data = PremiumCode::orderByDesc("created_at")->get();
    	
    	return datatables()->of($data)
        ->make(true);
    }

    public function generateCode(Request $request)
    {
    	$chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	//$total = $request->jumlah_kode;
    	$length = strlen($chars);
    	// $string = "";
    	$code = "";

    	// for ($j=0; $j < $total; $j++) { 
    		
	    	for($i=0;$i<20;$i++)
	    	{
	    		$random_character = $chars[mt_rand(0, $length-1)];
	    		$code .= $random_character;
	    	}

            // if(strlen($string) > 20) {
            //     $string = substr($string, 0 - strlen($string), 20 );
            // }

	    	//$code[$j] = $string;
    	// }

            PremiumCode::create([
                 'code' => $code,
                 'status' => 'non-aktif'
            ]);
            

        //return $code;
        return response()->json(['success' => 'Code generated successfully!']);

    }

}


