<?php

namespace PichyLaravel\Hasher;

use Illuminate\Support\ServiceProvider;

class Md5HasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5hash', function () {
            return new Md5Hasher();
        });
    }
}
