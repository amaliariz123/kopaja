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
use App\Models\ExerciseQuestion;

class DashboardController extends Controller
{

    public function index($range=null)
    {
        $data['daily'] = DailyReport::orderBy('daily_date','asc')->get();
        $data['monthly'] = MonthlyReport::orderBy('month_year','asc')->get();
        
        

        $now = Carbon::now()->format('Y-m-d');
        $seven = Carbon::now()->subDays(6)->format('Y-m-d');
        $thirty = Carbon::now()->subDays(29)->format('Y-m-d');
        $month = Carbon::now()->format('m');
        $year =  Carbon::now()->format('Y');

        $result['premium'] = 0;
        $result['regular'] = 0;
        $result['testimoni'] = 0;
        $result['exercise'] = 0;
        $result['show'] = 'Today';

        if($range)
        {
            //all time
            if((isset($range['flag']) && $range[1] == null) || (isset($range['flag']) && $range[1]='1970-01-01')) {
                if(isset($data['monthly'])) {
                    foreach ($result as $item) {
                        $result['premium'] = 0;
                        $result['regular'] = 0;
                        $result['testimoni'] = 0;
                        $result['exercise'] = 0;
                        $result['show'] = 'Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard', $result);
                } elseif($data['monthly'] != []) {
                    foreach ($data['monthly'] as $item) {
                        if($item['month']) {
                            $result['premium']=$result['premium']+$item['total_premium_members'];
                            $result['regular']=$result['regular']+$item['total_regular_members'];
                            $result['testimoni']=$result['testimoni']+$item['total_testimonials'];
                            $result['exercise']=$result['exercise']+$item['total_tax_exercises'];
                            $result['show'] = 'All time';
                            $result['data'][] = $item;
                        } else {
                            $result['premium']=0;
                            $result['regular']=0;
                            $result['testimoni']=0;
                            $result['exercise']=0;
                            $result['show']='All time';
                            $result['data'][]=$item;
                        }
                    }
                    $result['data']=json_encode($result['data']);
                    return view('dashboard', $result);
                }
            } 
            //today atau default
            elseif ($range[1]==$now && $range[2] == $now || $range[1]=='1970-01-01') {
                if($data['daily'] == []) {
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['testimoni']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard', $result);
                } elseif ($data['daily'] != [] ) {
                    # code...
                }
            }

        }


        return $data['monthly'];
    	// return view('dashboard');

    }

    public function filter(Request $request)
    {
    	// return $request;
        if(isset($request['all_time']))
        {
            $data = $request->except('_token', 'all_time');
            $data['flag'] = $request['all_time'];
        } else {
            $data = $request->except('_token');
        }

        if(isset($request['all_time']))
        {
            $range['flag'] = $data['flag'];
        }

        $range[1] = date('Y-m-d', strtotime(substr($data['range'],0,10)));
        $range[2] = date('Y-m-d', strtotime(substr($data['range'],13,20)));

        return $this->index($range);
    }
}
