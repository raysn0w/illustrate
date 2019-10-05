<?php

namespace Illustrate\Concept;

use Illustrate\Concept\Middleware\TestAbort;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('web', TestAbort::class);
    }

    public function register()
    {
        //
    }
}
