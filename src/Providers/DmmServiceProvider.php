<?php

namespace Revolution\Dmm\Providers;

use Dmm\Dmm;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Revolution\Dmm\Contracts\Factory;
use Revolution\Dmm\DmmClient;

class DmmServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Factory::class, function ($app) {
            return new DmmClient(new Dmm($app['config']->get('services.dmm')));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [Factory::class];
    }
}
