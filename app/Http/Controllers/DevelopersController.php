<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;

class DevelopersController extends Controller
{
    public function indexDev()
    {
    	//return $data;
    	return view('setting.developer_index');
    }
}
