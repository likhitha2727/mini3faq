# mini3faq

To run the faq project:

1. git clone https://github.com/likhitha2727/mini3faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database / with sqlite or other (https://laravel.com/docs/7.2/database)
5. Run: php artisan migrate
6.  Run: unit tests: phpunit
7. Run: seeds php artisan migrate:refresh --seed