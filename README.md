# lumen-serve
Command php artisan serve for lumen framework

# Installation
1. `composer require linhdanchu/lumen-serve`
2. Register service provider in `boostrap\app.php` with `$app->register(Linhdanchu\LumenServe\CommandServeServiceProvider::class)`
3. Run `php artisan serve`
