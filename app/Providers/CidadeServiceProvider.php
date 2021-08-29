<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CidadeServiceProvider extends ServiceProvider
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
        $this->app->bind('Cidade', \App\Services\CidadeService::class);
    }
}
