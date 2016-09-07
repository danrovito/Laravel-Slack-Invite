<?php

namespace Darovi\LaravelSlackInvite;

/*
 *
 * @author Dan Rovito <dan@darovi.co>
 */

use Illuminate\Support\ServiceProvider;

class LaravelSlackInvite extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    public function boot()
    {
        //
    }

    public function register()
    {
        // Register 'slack' instance container to our Slack object
        $this->app['slack'] = $this->app->share(function ($app) {
            return new Darovi\LaravelSlackInvite\Slack();
        });

        // adds Alias in app/config/app.php
        $this->app->booting(function () {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('slack', 'Darovi\LaravelSlackInvite\Facades\Slack');
        });
    }
}
