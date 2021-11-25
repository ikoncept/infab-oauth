<?php

namespace Ikoncept\InfabOauth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ikoncept\InfabOauth\Commands\InfabOauthCommand;

class InfabOauthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('infab-oauth')
            ->hasConfigFile();
    }
}
