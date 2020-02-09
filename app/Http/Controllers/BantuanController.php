<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BantuanController extends Controller
{
    public function indexBantuan()
    {
    	return view('setting.bantuan_index');
    }
}
