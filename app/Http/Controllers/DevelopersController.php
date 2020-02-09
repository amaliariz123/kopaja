<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopersController extends Controller
{
    public function indexDev()
    {
    	return view('setting.developer_index');
    }
}
