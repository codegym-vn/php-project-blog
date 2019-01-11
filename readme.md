nstall composer
composer install

Tạo file .env và kết nối database
cp .env.example .env

Tạo migrate và seed
php artisan migrate php artisan db:seed

Tạo key
php artisan key:generate

Tạo storage link
php artisan storage:link

Chạy laravel
php artisan serve
