<?php

namespace Davidhsianturi\BladeBootstrapIcons;

use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class BladeBootstrapIconsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('bootstrap-icons', [
                'path' => __DIR__ . '/../resources/svg',
                'prefix' => 'bi',
            ]);
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../resources/svg' => public_path('vendor/blade-bootstrap-icons'),
            ], 'blade-bootstrap-icons');
        }
    }
}
