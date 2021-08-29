<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PostoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('Posto', \App\Services\PostoService::class);
    }
}
