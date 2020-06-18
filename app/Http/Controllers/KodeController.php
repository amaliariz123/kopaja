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
    	$total = $request->jumlah_kode;
        $code_array = [];
        $check = PremiumCode::select('code')->get();

        for ($i=0; $i < $total ; $i++) { 

            $code_array[$i] = str_random(20);
            PremiumCode::create([
                 'code' => $code_array[$i],
                 'status' => 'non-aktif'
            ]);

            foreach ($check as $key => $value) {
                if($code_array[$i] == $value) {
                    $code_array[$i] = str_replace(str_random(20));
                    PremiumCode::create([
                         'code' => $code_array[$i],
                         'status' => 'non-aktif'
                    ]);
                }
            }
        }
        return response()->json(['success' => 'Code generated successfully!']);
    }

}


