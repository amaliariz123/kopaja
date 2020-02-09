<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function indexContact()
    {
    	return view('setting.contact_index');
    }
}
