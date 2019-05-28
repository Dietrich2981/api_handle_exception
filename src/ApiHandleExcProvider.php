<?php

namespace Dietrich\ApiHandleExc;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;

class ApiHandleExcProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            ExceptionHandler::class,
            ApiLogHandler::class
        );

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'api-handle-exc-migrations');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {



    }
}
