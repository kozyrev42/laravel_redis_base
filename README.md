<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

`php -S 127.0.0.1:8000 -t public`

1. Установка проекта: `composer create-project --prefer-dist laravel/laravel laravel_redis_base "9.*"`

2. Установка пакета для работы с Redis: `composer require predis/predis` 

Прописать в config/database.php:

'redis' => [
    'client' => env('REDIS_CLIENT', 'predis'),
    // ...
]

3. Генерим модель Post, миграцию, и фабрику одной командой:
`php artisan make:model Post -mf`

Поправил миграцию, настроил модель и фабрику.

4. Прописываем в .env CACHE_DRIVER=redis
- тогда будут браться настройки из config/cache.php из массива 'redis'
- чтобы фасад CACHE работал с Redis-ом,

5. Настроил ПРЕФИКС:ключа:
- в config/database.php поправил:
`'prefix' => env('REDIS_PREFIX')`

- в config/cache.php поправил:
`'prefix' => env('CACHE_PREFIX'),`

- в .env прописал:
REDIS_PREFIX=laravel:

теперь к ключу будет добавляться префикс laravel:
пример: laravel:my-key-4

6. Создал две консольных команды: чтение и удаление данных из редиса по ключу.

7. Создал консольную команду, для тестирования метода "rememberForever"

8. Создал консольную команду, для заполнения таблицы рандомными постами

9. Создал консольную команду, для переноса постов из таблици, в хранилище Редис

10. Создан роут и метод для получения поста из кеша Редис

11. Консольная команда, для имитации api-роута по созданию поста (в базе и в редисе)
