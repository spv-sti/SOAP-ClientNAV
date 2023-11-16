<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\SalesOrderController as SOC;

class SyncCPS extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cps:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start Sync CPS';

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
        $soc = new SOC();
        return $soc->index(1);
    }
}