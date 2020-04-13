<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;
use Carbon\Carbon;
use DateTime;
use DateTimeInterface;
use DatePeriod;
use DateInterval;
use Session;
use App\Models\Testimonial;
use App\Models\Member;
use App\Models\DailyReport;
use App\Models\MonthlyReport;

class DashboardController extends Controller
{
	public function daily()
    {

    }

    public function monthly()
    {

    }

    public function index()
    {
    	return view('dashboard');
    }

    public function filter(Request $request)
    {
    	
    }
}
