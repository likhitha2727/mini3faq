
# mini3faq

To run the faq project:

1. git clone https://github.com/likhitha2727/mini3faq.git
2. CD into FAQ and run composer install
3. cp .env.example to .env
4. setup database / with sqlite or other (https://laravel.com/docs/7.2/database)
5. Run: php artisan migrate
6. Run: unit tests: phpunit
7. Run: seeds php artisan migrate:refresh --seed
8. Install laravel dusk to do end to end testing of all the functions included in the project in ubuntu.
9. Run: sudo apt-get update 
10. Run: sudo apt-get -y install libxpm4 libxrender1 libgtk2.0-0 libnss3 libgconf-2-4 
11. Run: sudo apt-get install chromium-browser
12. Run: sudo apt-get -y install xvfb gtk2-engines-pixbuf 
13. Run: sudo apt-get -y install xfonts-cyrillic xfonts-100dpi xfonts-75dpi xfonts-base xfonts-scalable
14. Run: sudo apt-get -y install imagemagick x11-apps
15. Run: composer require --dev laravel/dusk
16. Run: sudo apt-get install php5-curl
17. Run: php artisan dusk:install
18. After these steps of installation I included "use Laravel\Dusk\DuskServiceProvider;" in AppServiceProvider and under the function register include "$this->app->register(DuskServiceProvider::class);" in it.
19. To run the test Run: php artisan dusk

