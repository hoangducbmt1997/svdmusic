<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Helper\CartHelper;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     *
     *
     */
    protected $router;

    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        Paginator::useBootstrap();
        view()->composer('*',function($view){
            $view->with([
                'cart' => new CartHelper(),
            ]);

        });
        if($this->app->environment('production')) {
            URL::forceScheme('https');
        }

    }
}
