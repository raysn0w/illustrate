<?php

namespace Illustrate\Concept;

use Illustrate\Concept\Commands\GeneratorCommand;
use Illustrate\Concept\Middleware\EncryptSession;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('web', EncryptSession::class);
        if ($this->app->runningInConsole()) {
            $this->commands([
                GeneratorCommand::class,
            ]);
        }
    }

    public function register()
    {
        //
    }
}
