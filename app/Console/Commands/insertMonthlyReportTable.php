<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\DailyReport;
use App\Models\MonthlyReport;
use DB;
use Carbon\Carbon;

class insertMonthlyReportTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:monthly';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will insert data to MonthlyReport table.';

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
        $result = DB::select('
            SELECT 
            (select Month(daily_date)) as month,
            (select Year(daily_date)) as year,
            (select Date_Format(daily_date, \'%Y-%m\')) as month_year,
            (select Sum(daily_reports.total_premium_members)) as total_premium_members,
            (select Sum(daily_reports.total_regular_members)) as total_regular_members,
            (select Sum(daily_reports.total_testimonials)) as total_testimonials,
            (select Sum(daily_reports.total_tax_exercises)) as total_tax_exercises
            FROM daily_reports
            group by Month(daily_date)
        ');

        $result = json_decode(json_encode($result), true);

        if($result)
        {
            $result = json_decode(json_encode($result), true);
            foreach ($result as $key => $value) {
                $save = MonthlyReport::updateOrCreate(['month' => $value['month']], $value);
            }
        }

        echo "MonthlyReport updated!";
    }
}
