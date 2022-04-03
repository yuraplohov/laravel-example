<?php

namespace Yuraplohov\LaravelExample\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelExampleServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');

        $this->commands([
            ExampleCommand::class,
        ]);

        $this->publishes([
            __DIR__ . '/../../config/example.php' => config_path('example.php'),
        ]);
    }
}