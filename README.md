# artisan serve... for Lumen

artisan serve for Lumen projects

# Installation

1. `composer require linhdanchu/lumen-artisan-serve "~1"`

2. Add the following line to the $commands array in app/Console/Kernel.php:

    `\Linhdanchu\Console\Commands\Serve::class,`

3. artisan serve