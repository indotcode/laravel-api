## Laravel API стандартный пакет

![](https://github.com/indotcode/laravel-api/blob/develop/docs/scale.png?raw=true)

Стартовый комплект Laravel API предоставит вам инструменты для создания API, которые понравятся всем, API-аутентификация уже предоставляется с паспортом. 

Вот список установленных пакетов:

- [Laravel Passport](https://laravel.com/docs/8.x/passport)
- [Laravel Socialite](https://laravel.com/docs/8.x/socialite)
- [Laravel Fractal](https://github.com/spatie/laravel-fractal)
- [Laravel Permission](https://github.com/spatie/laravel-permission)
- [Intervention Image](http://image.intervention.io/)

## Установка

Для установки проекта вы можете использовать git

```bash
git clone https://github.com/indotcode/laravel-api.git

cd laravel-api
```

Измените файл .env в соответствии со своими потребностями.

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

Когда у вас есть .env с настроенным подключением к базе данных, вы можете запускать миграции

```bash
php artisan migrate

php artisan passport:install
```

Запустите `php artisan db:seed` и у вас должен появиться новый пользователь с настроенными ролями и разрешениями.

## Тесты

Перейдите в корень проекта и запустите `vendor/bin/phpunit` после установки всех зависимостей композитора и после создания файла .env.

## Документация по API
Проект использует схему API в качестве спецификации API и [Aglio](https://github.com/danielgtaylor/aglio) чтобы отобразить документы API, установите aglio и [merge-apib](https://github.com/ValeriaVG/merge-apib) на вашем компьютере, а затем вы можете запустить следующую команду для компиляции и рендеринга документов API 
```bash
composer api-docs
```

## License

Laravel API - это программное обеспечение с открытым исходным кодом под лицензией [MIT license](http://opensource.org/licenses/MIT)
