<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class PostDelete extends Command
{
    /**
     * The name and signature of the console command.
     *
     * Команда для имитации api-роута для удаления поста (в базе и в редисе)
     * 
     * Выполнить команду:
     *  php artisan post:delete
     * @var string
     */
    protected $signature = 'post:delete';

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
        // имитация входящих данных, id поста для удаления
        $data = [
            'id' => 3,
        ];

        // удаляем пост из базы
        $post = Post::find($data['id']);
        $post->delete();
        
        // удаляем пост из редиса
        $key = 'posts:' . $post->id;
        Cache::forget($key);
        
        $this->info('Post deleted');
    }
}
