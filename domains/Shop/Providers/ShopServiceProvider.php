<?php

namespace Domains\Shop\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ShopServiceProvider extends ServiceProvider
{
    public function register()
    {
        config(['database.connections.shop' => config('database.connections.shop_db')]);
    }

    public function boot()
    {
        // Load views from domains/Shop/Views with namespace 'Shop'
        $this->loadViewsFrom(base_path('domains/Shop/Views'), 'Shop');

        // Load module routes automatically
        $this->loadRoutesFrom(base_path('domains/Shop/Routes/web.php'));


        $this->loadMigrationsFrom(base_path('domains/Shop/Database/Migrations'));

    }

}
