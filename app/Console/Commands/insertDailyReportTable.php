<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\DailyReport;
use App\Models\MonthlyReport;
use DB;
use Carbon\Carbon;

class insertDailyReportTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will insert data to DailyReport table.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $date = DailyReport::orderBy('daily_date','asc')->first();
        if($date) {
            $result['member'] = DB::select('
                SELECT
                (select date(members.created_at)) as daily_date,
                (select count(case when members.id is not null and members.member_status="premium" then 1 else null end)) as total_premium_members,
                (select count(case when members.id is not null and members.member_status="reguler" then 1 else null end)) as total_regular_members
                FROM members
                where members.created_at Between "'. date('Y-m-d', strtotime($date->daily_date)) .' 00:00:00" AND "'. date('Y-m-d H:i:s', strtotime('+1days')).'"
                group by date(members.created_at)
            ');

            $result['testimoni'] = DB::select('
                SELECT
                (select date(testimonials.created_at)) as daily_date,
                (select count(distinct(testimonials.id))) as total_testimonials
                FROM testimonials 
                where testimonials.created_at Between "'. date('Y-m-d', strtotime($date->daily_date)) .' 00:00:00" AND "'. date('Y-m-d H:i:s', strtotime('+1days')).'"
                group by date(testimonials.created_at)
            ');

            $result['exercise'] = DB::select('
                SELECT 
                (select date(exercise_questions.created_at)) as daily_date,
                (select count(distinct(exercise_questions.id))) as total_tax_exercises
                FROM exercise_questions
                where exercise_questions.created_at Between "'. date('Y-m-d', strtotime($date->daily_date)) .' 00:00:00" AND "'. date('Y-m-d H:i:s', strtotime('+1days')).'"
                group by date(exercise_questions.created_at)
            ');
        } else {
            $result['member'] = DB::select('
                SELECT
                (select date(members.created_at)) as daily_date,
                (select count(case when members.id is not null and members.member_status="premium" then 1 else null end)) as total_premium_members,
                (select count(case when members.id is not null and members.member_status="reguler" then 1 else null end)) as total_regular_members
                FROM members
                group by date(members.created_at)
            ');
            $result['testimoni'] = DB::select('
                SELECT
                (select date(testimonials.created_at)) as daily_date,
                (select count(distinct(testimonials.id))) as total_testimonials
                FROM testimonials 
                group by date(testimonials.created_at)
            ');

            $result['exercise'] = DB::select('
                SELECT 
                (select date(exercise_questions.created_at)) as daily_date,
                (select count(distinct(exercise_questions.id))) as total_tax_exercises
                FROM exercise_questions
                group by date(exercise_questions.created_at)
            ');
        }


        if($result['member']){
            $result['member'] = json_decode(json_encode($result['member']),true);
            foreach ($result['member'] as $key => $value) {
                $save['member'] = DailyReport::updateOrCreate(['daily_date' => $value['daily_date']], $value);
            }
        }

        if($result['testimoni']){
            $result['testimoni'] = json_decode(json_encode($result['testimoni']),true);
            foreach ($result['testimoni'] as $key => $value) {
                $save['testimoni'] = DailyReport::updateOrCreate(['daily_date' => $value['daily_date']], $value);
            }
        }

        if($result['exercise']){
            $result['exercise'] = json_decode(json_encode($result['exercise']),true);
            foreach ($result['exercise'] as $key => $value) {
                $save['exercise'] = DailyReport::updateOrCreate(['daily_date' => $value['daily_date']], $value);
            }
        }

        echo "DailyReport updated!";

    }
}
