<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Areas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;
use DateTime;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Test description';

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
     * @return int
     */
    public function handle()
    {

        // $holiday = array([
        //     ''
        // ]);
        $this->deadlines = 15;

        $date = Carbon::now();
        //$datef = Carbon::createFromDate(1976,24,01)->age;
        //
        $i=0;
        while ($i<15) {
            dump($i);
            $date = $date->addDay(1);

            if (($date->dayOfWeekIso != 6) && ($date->dayOfWeekIso !== 7)){
                
                $i++;
                dump($date->format('d-m-Y'));
                // dump($date->dayOfWeekIso);
            }
            
            
        }
        //$date = $date->format('d-m-Y');
        dd();
        dd($date);

        $ddate = "2021-06-27";
        $duedt = explode("-", $ddate);
        $date  = mktime(0, 0, 0, $duedt[1], $duedt[2], $duedt[0]);
        $week  = (int)date('N', $date);
        echo "Weeknummer: " . $week;
        // $areas = Areas::find(1);
        dd('ss');

        // dump($areas);c
        $format = 'Y-m-d';
        $selectedDateStart="01/12/2021";
        $date = new DateTime($selectedDateStart);
        echo $date->format('Y-m-d H:i:s');
        // $created = Date($selectedDateStart);
        $carbon = new Carbon($selectedDateStart);
        $date = $carbon;
        $v = $selectedDateStart;
        dump($v);
        //$date=date_create($selectedDateStart);
        $date=date_create($v);
        echo date_format($date,"Y-m-d H:i:s");
        //dump(date_format($selectedDateStart,"Y/m/d H:i:s"));
        dd($v);
        //$selectedDateStart= Carbon::createFromFormat('d-m-Y H:i:s',  $created);
        //dump($created);
        dd($carbon);

        // $selectedDateStart = Carbon::now();
        // $now = Carbon::parse(date('Y'));
        // $cDate = Carbon::parse('2021/06/21');
        // dd($cDate->diffInDays());
        // dd($now);
        // dd($selectedDateStart[0]);
        // $y= Carbon::createFromFormat($format, $selectedDateStart);
        // $y=date("Y",$selectedDateStart);
        //dump($y);

        // $result = Areas::select('areas.id','areas.category_id','areas.name',
        //     'categories.name AS name_categories','areas.status')
        //     ->join('categories', 'areas.category_id', '=', 'categories.id')
        //     ->where('areas.category_id','=',1)
        //     ->orderBy('areas.category_id', 'ASC')
        //     ->dd();

        //     dump($result);

        return 0;
    }
}
