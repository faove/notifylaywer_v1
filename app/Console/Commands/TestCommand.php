<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Areas;

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

        // dump($areas);

        $result = Areas::select('areas.id','areas.category_id','areas.name',
            'categories.name AS name_categories','areas.status')
            ->join('categories', 'areas.category_id', '=', 'categories.id')
            ->where('areas.category_id','=',1)
            ->orderBy('areas.category_id', 'ASC')
            ->dd();

            dump($result);

        return 0;
    }
}
