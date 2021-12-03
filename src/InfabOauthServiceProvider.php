<?php

namespace Ikoncept\InfabOauth;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;

class InfabOauthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->register(EventServiceProvider::class);
    }
}
