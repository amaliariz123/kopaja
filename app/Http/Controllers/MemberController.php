<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Auth;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexMember()
    {
    	return view('users.members_index');
    }

    public function indexTesti()
    {

    	return view('users.testimoni_index');
    }
    
}
