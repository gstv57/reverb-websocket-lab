<?php

namespace App\Console\Commands;

use App\Events\Test as EventsTest;
use Illuminate\Console\Command;

class Test extends Command
{
    protected $signature = 'app:test';
    protected $description = 'Command description';
    public function handle()
    {
        EventsTest::dispatch();
    }
}
