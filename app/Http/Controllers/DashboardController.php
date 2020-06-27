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
use App\Models\Quiz;
use App\Models\Member;
use App\Models\DailyReport;
use App\Models\MonthlyReport;
use App\Models\ExerciseQuestion;

class DashboardController extends Controller
{

    public function index($range=null)
    {


        $data['daily'] = DailyReport::orderBy('daily_date','asc')->get();
        $data['monthly'] = MonthlyReport::orderBy('month_year')->get();

        $now = Carbon::now()->format('Y-m-d');
        $yesterday = Carbon::yesterday()->format('Y-m-d');
        $seven = Carbon::now()->subDays(6)->format('Y-m-d');
        $thirty = Carbon::now()->subDays(29)->format('Y-m-d');
        $month = Carbon::now()->format('m');
        $year =  Carbon::now()->format('Y');

        $result['premium'] = 0;
        $result['regular'] = 0;
        $result['kuis'] = 0;
        $result['exercise'] = 0;
        $result['show'] = 'Today';

        if($range)
        {
            //all time
            if((isset($range['flag']) && $range[1] == null) || (isset($range['flag']) && $range[1]='1970-01-01')) {
                if($data['monthly']->isEmpty()) {
                    foreach ($result as $item) {
                        $result['premium'] = 0;
                        $result['regular'] = 0;
                        $result['kuis'] = 0;
                        $result['exercise'] = 0;
                        $result['show'] = 'Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard', $result);
                } elseif(!$data['monthly']->isEmpty()) {
                    foreach ($data['monthly'] as $item) {
                        if($item['month']) {
                            $result['premium']=$result['premium']+$item['total_premium_members'];
                            $result['regular']=$result['regular']+$item['total_regular_members'];
                            $result['kuis']=$result['kuis']+$item['total_quizzes'];
                            $result['exercise']=$result['exercise']+$item['total_tax_exercises'];
                            $result['show'] = 'All time';
                            $result['data'][] = $item;
                        } else {
                            $result['premium']=0;
                            $result['regular']=0;
                            $result['kuis']=0;
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
                if($data['daily']->isEmpty()) {
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['kuis']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard', $result);
                } elseif (!$data['daily']->isEmpty() ) {
                    foreach ($data['daily'] as $item) {
                        if($item['daily_date'] == $now) {
                            $result['premium'] = $result['premium']+$item['total_premium_members'];
                            $result['regular'] = $result['regular']+$item['total_regular_members'];
                            $result['kuis'] = $result['kuis']+$item['total_quizzes'];
                            $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                            $result['show'] = 'Today';
                            $result['data'][] = $item;
                        } else {
                            $result['premium']=0;
                            $result['regular']=0;
                            $result['kuis']=0;
                            $result['exercise']=0;
                            $result['show']='Today';
                            $result['data'][] = $item;
                        }
                    }
                    $result['data'] = json_encode($result['data']);
                    return view('dashboard', $result);
                    // return $result;
                }
            }

            //yesterday
            elseif ($range[1]==$yesterday && $range[2] == $yesterday) {
                if($data['daily']->isEmpty()) {
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['kuis']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard', $result);
                    // return $result;

                } elseif (!$data['daily']->isEmpty() ) {
                    foreach ($data['daily'] as $item) {
                        if($item['daily_date'] == $yesterday) {
                            $result['premium'] = $result['premium']+$item['total_premium_members'];
                            $result['regular'] = $result['regular']+$item['total_regular_members'];
                            $result['kuis'] = $result['kuis']+$item['total_quizzes'];
                            $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                            $result['show'] = 'Yesterday';
                            $result['data'][] = $item;
                        } else {
                            $result['premium']=0;
                            $result['regular']=0;
                            $result['kuis']=0;
                            $result['exercise']=0;
                            $result['show']='Yesterday';
                            $result['data'][] = $item;
                        }
                    }
                    $result['data'] = json_encode($result['data']);
                    return view('dashboard', $result);
                    // return $result;
                }
            }

            //last seven days
            elseif ($range[1] == $seven && $range[2] == $now) {
                if($data['daily']->isEmpty()) {
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['kuis']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard',$result);

                } elseif (!$data['daily']->isEmpty()) {
                    foreach ($data['daily'] as $item) {
                        if($item['daily_date'] >= $seven) {
                            $result['premium'] = $result['premium']+$item['total_premium_members'];
                            $result['regular'] = $result['regular']+$item['total_regular_members'];
                            $result['kuis'] = $result['kuis']+$item['total_quizzes'];
                            $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                            $result['show'] = 'Last 7 days';
                            $result['data'][] = $item;
                        } else {
                            $result['premium']=0;
                            $result['regular']=0;
                            $result['kuis']=0;
                            $result['exercise']=0;
                            $result['show']='Last 7 days';
                            $result['data'][] = $item;
                        }
                    }
                    $result['data']=json_encode($result['data']);
                    return view('dashboard', $result);
                    // return $result;
                }
            }
            //last 30 days
            elseif ($range[1]==$thirty && $range[2] == $now) {
                if($data['daily']->isEmpty()) {
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['kuis']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard',$result);
                } elseif (!$data['daily']->isEmpty()) {
                    foreach ($data['daily'] as $item) {
                        if($item['daily_date'] >= $thirty) {
                            $result['premium'] = $result['premium']+$item['total_premium_members'];
                            $result['regular'] = $result['regular']+$item['total_regular_members'];
                            $result['kuis'] = $result['kuis']+$item['total_kuis'];
                            $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                            $result['show'] = 'Last 30 days';
                            $result['data'][] = $item;
                        } else {
                            $result['premium']=0;
                            $result['regular']=0;
                            $result['kuis']=0;
                            $result['exercise']=0;
                            $result['show']='Last 30 days';
                            $result['data'][] = $item;
                        }
                    }
                    $result['data'] = json_encode($result['data']);
                    return view('dashboard',$result);
                    // return $result;
                }
            }

            //custom range same date
            elseif ($range[1] == $range[2] ) {
                if($data['daily']->isEmpty()) {
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['kuis']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard',$result);

                } elseif (!$data['daily']->isEmpty()) {
                    foreach ($data['daily'] as $item) {
                        if(($item['daily_date'] == $range[1]) || ($item['daily_date'] == $range[2]) ) {
                            $result['premium'] = $result['premium']+$item['total_premium_members'];
                            $result['regular'] = $result['regular']+$item['total_regular_members'];
                            $result['kuis'] = $result['kuis']+$item['total_quizzes'];
                            $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                            $result['show'] = $range[1];
                            $result['data'][] = $item;
                            // return $item['daily_date'] ;
                        }
                    }
                    $result['data'] = json_encode($result['data']);
                    return view('dashboard',$result);
                      // return $result;
                }
            }

            elseif (((strtotime($range[2]) - strtotime($range[1])) / (24*3600)+1) < (cal_days_in_month(CAL_GREGORIAN, $month, $year)) && date('m', strtotime($range[1])) == $month && date('m',strtotime($range[2])) == $month) {

                //custom range in same month
                $start = new DateTime($range[1]);
                $interval = new DateInterval('P1D');
                $end = new DateTime($range[2]);
                $period = new DatePeriod($start, $interval, $end);

                if($data['daily']->isEmpty()) {
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['kuis']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard',$result);
                     return $data['daily'];

                } elseif (!$data['daily']->isEmpty()) {
                    foreach ($data['daily'] as $item) {
                        $item['daily_date'];
                        foreach ($period as $date) {
                            if($date->format('Y-m-d') == $item['daily_date']) {
                                if($item['daily_date'] >= $range[1]) {
                                    $result['premium'] = $result['premium']+$item['total_premium_members'];
                                    $result['regular'] = $result['regular']+$item['total_regular_members'];
                                    $result['kuis'] = $result['kuis']+$item['total_quizzes'];
                                    $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                                    $result['show'] = 'From '.$range[1].' to '.$range[2];
                                    $result['data'][] = $item;
                                } else {
                                    $result['premium']=0;
                                    $result['regular']=0;
                                    $result['kuis']=0;
                                    $result['exercise']=0;
                                    $result['show']='From '.$range[1].' to '.$range[2];
                                    $result['data'][] = $item;
                                }
                            } else {
                                $result['premium']=0;
                                $result['regular']=0;
                                $result['kuis']=0;
                                $result['exercise']=0;
                                $result['show']='From '.$range[1].' to '.$range[2];
                                $result['data'][] = $item;
                            }
                        }
                    }
                    $result['data'] = json_encode($result['data']);
                    return view('dashboard',$result);
                }
            }
            //this month
            elseif (date('m', strtotime($range[1])) == $month && date('m', strtotime($range[2])) == $month) {
                if ($data['monthly']->isEmpty()) {
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['kuis']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard',$result);
                    // return $result;
                } elseif (!$data['monthly']->isEmpty()) {
                    foreach ($data['monthly'] as $item) {
                        if ($item['month'] == $month) {
                            $result['premium'] = $result['premium']+$item['total_premium_members'];
                            $result['regular'] = $result['regular']+$item['total_regular_members'];
                            $result['kuis'] = $result['kuis']+$item['total_quizzes'];
                            $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                            $result['show'] = Carbon::now()->format('F');
                            $result['data'][] = $item;
                            // return $result['data'];
                        } else {
                            $result['premium']=0;
                            $result['regular']=0;
                            $result['kuis']=0;
                            $result['exercise']=0;
                            $result['show']= Carbon::now()->format('F');
                            $result['data'][] = $item;
                            // return $result['data'];
                        }
                    }
                     $result['data'] = json_encode($result['data']);
                    return view('dashboard',$result);
                     // return $result;
                }
            }
            //last month
            elseif (date('m', strtotime($range[1])) == date('m',strtotime($range[2]))) {
                if($data['monthly']->isEmpty()){
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['kuis']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard', $result);
                    // return $result;
                } elseif (!$data['monthly']->isEmpty()) {
                    foreach ($data['monthly'] as $item) {
                        if(($item['month'] == date('m', strtotime($range[1]))) && ($item['year'] == date('Y', strtotime($range[1])))) {
                            $result['premium'] = $result['premium']+$item['total_premium_members'];
                            $result['regular'] = $result['regular']+$item['total_regular_members'];
                            $result['kuis'] = $result['kuis']+$item['total_quizzes'];
                            $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                            $result['show'] = Carbon::now()->subMonth()->format('F');
                            $result['data'][] = $item;
                        } 
                    }
                    $result['data'] = json_encode($result['data']);
                    return view('dashboard',$result);
                    // return $result;
                }
            }
            //custom range
            else {
                $start = new DateTime($range[1]);
                $interval = new DateInterval('P1D');
                $end = new DateTime($range[2]);
                $period = new DatePeriod($start, $interval, $end);

                if($data['daily']->isEmpty()) {
                    foreach ($result as $item) {
                        $result['premium']=0;
                        $result['regular']=0;
                        $result['kuis']=0;
                        $result['exercise']=0;
                        $result['show']='Today';
                        $result['data'][] = $item;
                    }
                    $result['data'] = json_encode($result['data']);
                    session(['warning' => ['Empty data!']]);
                    return view('dashboard',$result);
                    // return $result;
                } elseif (!$data['daily']->isEmpty()) {
                    foreach ($data['daily'] as $item) {
                        $item['daily_date'];
                        foreach ($period as $date) {
                            if($date->format('Y-m-d') == $item['daily_date']) {
                                if($item['daily_date'] >= $range[1]) {
                                    $result['premium'] = $result['premium']+$item['total_premium_members'];
                                    $result['regular'] = $result['regular']+$item['total_regular_members'];
                                    $result['kuis'] = $result['kuis']+$item['total_quizzes'];
                                    $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                                    $result['show'] = 'From '.$range[1].' to '.$range[2];
                                    $result['data'][] = $item;
                                } else {
                                    $result['premium']=0;
                                    $result['regular']=0;
                                    $result['kuis']=0;
                                    $result['exercise']=0;
                                    $result['show']='From '.$range[1].' to '.$range[2];
                                    $result['data'][] = $item;
                                }
                            } else {
                                $result['premium']=0;
                                $result['regular']=0;
                                $result['kuis']=0;
                                $result['exercise']=0;
                                $result['show']='From '.$range[1].' to '.$range[2];
                                $result['data'][] = $item;
                            }
                        }
                    }
                    $result['data'] = json_encode($result['data']);
                    return view('dashboard',$result);
                }
            }
        }
        elseif (!$data['daily']->isEmpty()) {
            foreach ($data['daily'] as $item) {
                if($item['daily_date'] == $now) {
                    $result['premium'] = $result['premium']+$item['total_premium_members'];
                    $result['regular'] = $result['regular']+$item['total_regular_members'];
                    $result['kuis'] = $result['kuis']+$item['total_quizzes'];
                    $result['exercise'] = $result['exercise']+$item['total_tax_exercises'];
                    $result['show'] = 'Today';
                    $result['data'][] = $item;
                } else {
                    $result['premium']=0;
                    $result['regular']=0;
                    $result['kuis']=0;
                    $result['exercise']=0;
                    $result['show']='Today';
                    $result['data'][] = $item;
                }
            }
            $result['data'] = json_encode($result['data']);
            return view('dashboard',$result);
            // return $result;
        } 
        foreach ($result as $item) {
            $result['premium']=0;
            $result['regular']=0;
            $result['kuis']=0;
            $result['exercise']=0;
            $result['show']='Today';
            $result['data'][] = $item;
        }

        $result['data'] = json_encode($result['data']);
        return view('dashboard',$result);
        // return $result;
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
