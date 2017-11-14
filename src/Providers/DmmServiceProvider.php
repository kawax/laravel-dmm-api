<?php

namespace Revolution\Dmm\Providers;

use Illuminate\Support\ServiceProvider;

use Dmm\Dmm;
use Revolution\Dmm\DmmClient;

class DmmServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

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
        $this->app->singleton(DmmClient::class, function ($app) {
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
        return [DmmClient::class];
    }
}
