<?php

namespace Ikoncept\InfabOauth\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Ikoncept\InfabOauth\InfabOauthServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        // Factory::guessFactoryNamesUsing(
        //     fn (string $modelName) => 'Ikoncept\\InfabOauth\\Database\\Factories\\'.class_basename($modelName).'Factory'
        // );
    }

    protected function getPackageProviders($app)
    {
        return [
            InfabOauthServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_infab-oauth_table.php.stub';
        $migration->up();
        */
    }
}
