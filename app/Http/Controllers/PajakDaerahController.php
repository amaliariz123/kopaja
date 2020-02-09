<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PajakDaerahController extends Controller
{
    public function indexPajakDaerah()
    {
    	return view('pajak.pajak_daerah_index');
    }
}
