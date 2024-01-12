<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class PostsToRedis extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Команда для переноса всех постов из таблицы posts в Redis
     * 
     * Выполнить команду:
     *  php artisan posts:to-redis
     * @var string
     */
    protected $signature = 'posts:to-redis';

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
        // получаем все посты, из таблицы posts и переносим их в Redis
        $posts = Post::all();
        foreach ($posts as $post) {
            Cache::put('posts:' . $post->id, $post);
        }

        $this->info('ok');
    }
}
