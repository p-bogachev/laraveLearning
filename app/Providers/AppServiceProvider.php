<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //шаринг переменных на все страницы
        View::share('date', date('Y'));

        //шаринг переменных только на конкретный раздел
        View::composer('user*', function($view) {
            $view->with('balance', 12345);
        });
    }
}
