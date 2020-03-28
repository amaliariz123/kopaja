<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestiController extends Controller
{
    public function indexTesti()
    {

    	return view('users.testimoni_index');
    }
}
