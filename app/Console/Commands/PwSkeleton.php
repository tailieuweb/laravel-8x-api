<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PwSkeleton extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pw:skeleton
                                {var1 : for example}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        echo 'var 1: ' . $this->argument('var1');
        return 0;
    }
}
