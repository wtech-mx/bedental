<?php

namespace App\Providers;

use App\Models\Colores;
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
        view()->composer('layouts.app', function ($view) {
            $colores = Colores::find(1);
            $view->with(['colores' => $colores]);
        });
    }
}
