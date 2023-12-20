<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

`php -S 127.0.0.1:8000 -t public`

1. Установка проекта: `composer create-project --prefer-dist laravel/laravel laravel_redis_base "9.*"`

2. Установка пакета для работы с Redis: `composer require predis/predis` 

Прописать в config/database.php:

'redis' => [
    'client' => env('REDIS_CLIENT', 'predis'),
    // ...
]
