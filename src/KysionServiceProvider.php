<?php

namespace Kysion\AntDesignProAdmin;

use Illuminate\Support\ServiceProvider;

class KysionServiceProvider extends ServiceProvider
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
        $this->publishes([__DIR__.'/../config/kysion.php' => config_path('kysion.php')], 'config');
        // $this->publishes([__DIR__.'/database/migrations/' => database_path('migrations')], 'migrations');
    }
}
