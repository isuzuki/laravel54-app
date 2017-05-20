<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SetDevelopment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'set:development';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'setting for develop environment';

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
        if ($this->laravel->environment('local')) {
            $this->call('ide-helper:generate');
            $this->call('ide-helper:meta');
        }
    }
}
