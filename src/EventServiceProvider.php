<?php

namespace Ikoncept\InfabOauth;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            'Infab\InfabSocialiteProvider\InfabExtendSocialite@handle',
        ],
    ];
}
