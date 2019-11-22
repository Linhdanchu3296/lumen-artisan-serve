<?php
namespace Linhdanchu\LumenServe;

use Linhdanchu\LumenServe\Console\Commands\ServeCommand;
use Illuminate\Support\ServiceProvider;

class CommandServeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('command.serve', function($app){
            return new ServeCommand;
        });
        $this->commands('command.serve');
    }
}