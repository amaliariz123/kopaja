<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DateTime;
use DateTimeInterface;
use DatePeriod;
use DateInterval;
use Session;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('dashboard');
    }

    public function filter(Request $request)
    {
    	
    }
}
