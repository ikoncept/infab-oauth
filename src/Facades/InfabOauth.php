<?php

namespace Ikoncept\InfabOauth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ikoncept\InfabOauth\InfabOauth
 */
class InfabOauth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'infab-oauth';
    }
}
