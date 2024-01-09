<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RedisTestCommandDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Выполнить команду:
     *  php artisan redis:go-delete
     * @var string
     */
    protected $signature = 'redis:go-delete';

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
        // удаляем данные по ключу
        $data = Cache::forget('my-key-4');
        dd($data);
    }
}
