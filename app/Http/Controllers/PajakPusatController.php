<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PajakPusatController extends Controller
{
    public function indexPajakPusat()
    {
    	return view('pajak.pajak_pusat_index');
    }
}
