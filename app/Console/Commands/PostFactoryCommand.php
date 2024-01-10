<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class PostFactoryCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Выполнить команду:
     *  php artisan post:factory
     * @var string
     */
    protected $signature = 'post:factory';

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
        // если посты создались, то выводим в консоль число "ok"
        if (Post::factory(10)->create()) {
            $this->info('ok');
        }

    }
}
