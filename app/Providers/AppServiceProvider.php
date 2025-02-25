<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $modules = ['Shop'];

        foreach ($modules as $module) {
            $provider = "Domains\\$module\\Providers\\{$module}ServiceProvider";
            if (class_exists($provider)) {
                $this->app->register($provider);
            }
        }
    }


    public function boot()
    {
        $modulesPath = base_path('domains');
        $modules = array_filter(scandir($modulesPath), function ($folder) use ($modulesPath) {
            return $folder !== '.' && $folder !== '..' && is_dir("$modulesPath/$folder");
        });

        foreach ($modules as $module) {
            $provider = "Domains\\$module\\Providers\\{$module}ServiceProvider";
            if (class_exists($provider)) {
                $this->app->register($provider);
            }
        }
    }
}
