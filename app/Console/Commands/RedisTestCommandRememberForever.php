<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class RedisTestCommandRememberForever extends Command
{
    /**
     *  The name and signature of the console command.
     *
     *  Выполнить команду:
     *  php artisan redis:go-remember-forever
     * 
     *  Используем rememberForever
     * 
     * @var string
     */
    protected $signature = 'redis:go-remember-forever';

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
        $str = "строка для записи в кеш";
        
        // rememberForever - метод без указания времени жизни кеша
        // remember - метод с указанием времени жизни кеша
        $result = Cache::rememberForever('my-key-4', function () use ($str) {
            // возвращаются данные из редиса под ключом "my-key-4", 
            // если данных нет, то записываем данные в редис под ключом "my-key-4", находящиеся в переменной $str,
            // и возвращаем эти данные

            // переменная $str - хранит данные, которые будут записаны в редис, под ключом "my-key-4"
            return $str;
        });

        dd($result);
    }
}
