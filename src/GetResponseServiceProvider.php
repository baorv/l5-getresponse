<?php

namespace Secomapp\GetResponse;

use Illuminate\Support\ServiceProvider;

class GetResponseServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/getresponse.php' => config_path('getresponse.php')
        ]);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/getresponse.php', 'getresponse');
        $this->app->singleton(GetResponse::class, function () {
            $sdk = new GetResponse(config('getresponse.apiKey'), config('getresponse.apiUrl'));
            return $sdk;
        });
    }
}