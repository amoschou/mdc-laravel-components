<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Combo\Frame;
use App\View\Components\MDC\{
    Button,
    Checkbox,
    Drawer,
    ListComponent,
    TopAppBar,
    TopAppBar__ActionItem,
    TopAppBar__NavigationIcon,
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
        Blade::component('checkbox', Checkbox::class);
        Blade::component('drawer', Drawer::class);
        Blade::component('frame', Frame::class);
        Blade::component('list', ListComponent::class);
        Blade::component('top-app-bar', TopAppBar::class);
        Blade::component('top-app-bar__action-item', TopAppBar__ActionItem::class);
        Blade::component('top-app-bar__navigation-icon', TopAppBar__NavigationIcon::class);
    }
}
