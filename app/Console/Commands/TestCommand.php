<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Areas;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

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
        // $areas = Areas::find(1);

        // dump($areas);c
        $format = 'Y-m-d';
        $selectedDateStart="01/12/2021";
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
