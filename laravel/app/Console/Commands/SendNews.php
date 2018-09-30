<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\News;

class SendNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'use broadcast to send news';

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
        broadcast(new News(date('Y-m-d h:i:s A').": BIG NEWS!"));
        $this->info('finished send news');
    }
}
