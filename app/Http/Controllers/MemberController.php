<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class MemberController extends Controller
{
    public function indexMember()
    {
    	return view('users.members_index');
    }

    public function indexTesti()
    {

    	return view('users.testimoni_index');
    }
}
