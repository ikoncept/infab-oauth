<?php

namespace Ikoncept\InfabOauth;

use Ikoncept\InfabOauth\Http\Controllers\AuthController;
use Illuminate\Contracts\Routing\Registrar as Router;
use Illuminate\Support\Facades\Route;

class RouteRegistrar
{
    /**
     * The router implementation.
     *
     * @var \Illuminate\Contracts\Routing\Registrar
     */
    protected $router;

    /**
     * Create a new route registrar instance.
     *
     * @param  \Illuminate\Contracts\Routing\Registrar  $router
     * @return void
     */
    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    /**
     * Register routes forPublic API endpoints.
     *
     * @return void
     */
    public function all() : void
    {
        Route::get('login/infab',  [\Ikoncept\InfabOauth\Http\Controllers\AuthController::class, 'redirectToProvider']);
        Route::get('login/infab/callback', [\Ikoncept\InfabOauth\Http\Controllers\AuthController::class, 'handleProviderCallback']);
    }
}
