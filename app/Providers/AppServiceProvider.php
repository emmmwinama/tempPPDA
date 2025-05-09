<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\Facades\Schema;
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
    public function boot(){

        Filament::serving(function (){
            Filament::registerViteTheme('resources/css/filament.css');

        }

        );

             //
        Schema::defaultStringLength(191);
    }
}
