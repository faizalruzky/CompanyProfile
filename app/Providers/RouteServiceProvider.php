<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot(Router $router)
    {
        //

        parent::boot($router);
    }

    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function map(Router $router)
    {
        $this->mapWebRoutes($router);

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    protected function mapWebRoutes(Router $router)
    {
        $router->group([
            'namespace' => $this->namespace, 'middleware' => 'web',
        ], function ($router) {
            /**
             * Root Dashboard
             */
            require app_path('Http/routes.php');
            require app_path('Http/Routes/Dashboard/route-dashboard.php');
            require app_path('Http/Routes/Dashboard/route-login.php');
            require app_path('Http/Routes/Dashboard/route-logout.php');
            require app_path('Http/Routes/Dashboard/route-password.php');
            require app_path('Http/Routes/Dashboard/route-register.php');
            require app_path('Http/Routes/Dashboard/route-accidentreport.php');

            /**
             * Root Public
             */
            require app_path('Http/Routes/Public/route-public.php');
            require app_path('Http/Routes/Public/route-ceo.php');
        });
    }
}
