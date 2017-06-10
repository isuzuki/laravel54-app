<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('development:set-ide-helper', function () {
    // execute on local environment only
    if (app()->environment('local')) {
        $this->call('ide-helper:generate');
        $this->call('ide-helper:meta');
    }
})->describe('Set for develop environment');
