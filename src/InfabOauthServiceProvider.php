<?php

namespace Ikoncept\InfabOauth;

use Illuminate\Support\ServiceProvider;

class InfabOauthServiceProvider extends ServiceProvider
{
    public function boot() : void
    {
        $this->publishes([
            __DIR__.'/../config/infab-oauth.php' => config_path('infab-oauth.php'),
        ], 'config');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/infab-oauth.php', 'infab-oauth');
        $this->app->register(EventServiceProvider::class);
    }
}
