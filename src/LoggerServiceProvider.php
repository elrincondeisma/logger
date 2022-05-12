<?php

namespace Icatala\Logger;

use Illuminate\Support\ServiceProvider;

class LoggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'logger');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'logger');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('logger.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/logger'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/logger'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/logger'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);

            // $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

            if (! class_exists('CreateLogsTable')) {
                $this->publishes([
                  __DIR__ . '/../database/migrations/create_logs_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_logs_table.php'),
                  // you can add any number of migrations here
                ], 'migrations');
              }
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'logger');

        // Register the main class to use with the facade
        $this->app->singleton('logger', function () {
            return new Logger;
        });
    }
}
