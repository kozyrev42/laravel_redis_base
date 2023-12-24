<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RedisTestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Выполнить команду:
     *  php artisan redis:go
     * @var string
     */
    protected $signature = 'redis:go';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle():void
    {
        // запись в редис
        Cache::put('my-key-4', 'my-value-4');
    }
}
