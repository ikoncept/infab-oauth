<?php

namespace Ikoncept\InfabOauth;

use Illuminate\Support\ServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InfabOauthServiceProvider extends ServiceProvider
{
    // public function configurePackage(Package $package): void
    // {
    //     /*
    //      * This class is a Package Service Provider
    //      *
    //      * More info: https://github.com/spatie/laravel-package-tools
    //      */
    //     // $package
    //     //     ->name('infab-oauth')
    //     //     ->hasConfigFile();
    //     // Route::get('login/infab',  [InfabAuthController::class, 'redirectToProvider']);
    //     // Route::get('login/infab/callback', [InfabAuthController::class, 'handleProviderCallback']);
    // }

    public function register() : void
    {
        $this->app->register(EventServiceProvider::class);
    }
}
