<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class PostCreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Команда для имитации api-роута по созданию поста (в базе и в редисе)
     * 
     * Выполнить команду:
     *  php artisan post:create
     * @var string
     */
    protected $signature = 'post:create';

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
        // имитация входящих данных
        $data = [
            'title' => 'заголовок поста',
            'content' => 'текст поста',
        ];

        // создаем новый пост в базе 
        $post = Post::create($data);

        // если пост создан, то записываем его в редис
        if ($post) {
            Cache::put('posts:' . $post->id, $post);
        }

        $this->info('ok');
    }
}
