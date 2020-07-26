<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\MDC\{
    Button,
};

class ComponentServiceProvider extends ServiceProvider
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
        Blade::component('button', Button::class);
    }
}

