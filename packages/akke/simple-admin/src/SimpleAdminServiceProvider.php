<?php

namespace AkKe\SimpleAdmin;

use Illuminate\Support\ServiceProvider;

class SimpleAdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/views','SimpleAdmin');
        // $this->publishes([
        //     __DIR__.'/views' => base_path('resources/views/vendor/SimpleAdmin'),
        // ]);



    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__ . '/routes.php';
        $this->app->make('AkKe\SimpleAdmin\SimpleAdminController');
    }
}
