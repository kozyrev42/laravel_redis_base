<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RedisTestCommandGet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Выполнить команду:
     *  php artisan redis:go-get
     * @var string
     */
    protected $signature = 'redis:go-get';

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
        // получаем данные по ключу
        $data = Cache::get('my-key-4');
        dd($data);
    }
}
