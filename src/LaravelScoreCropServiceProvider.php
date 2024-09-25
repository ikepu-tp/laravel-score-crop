<?php

namespace ikepu_tp\LaravelScoreCrop;

use Illuminate\Support\ServiceProvider;

class LaravelScoreCropServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/config/score-crop.php', 'score-crop');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPublishing();
        $this->defineRoutes();
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->loadViewsFrom(__DIR__ . "/resources/views", "LaravelScoreCrop");
    }

    /**
     * Register the package's publishable resources.
     */
    private function registerPublishing()
    {
        if (!$this->app->runningInConsole()) return;

        $this->publishes([
            __DIR__ . '/config/score-crop.php' => base_path('config/score-crop.php'),
        ], 'LaravelScoreCrop-config');
        $this->publishes([
            __DIR__ . "/resources/front" => resource_path("score-crop-front"),
        ], 'LaravelScoreCrop-front');


        $this->publishMigration();
        $this->publishView();
        $this->publishAsset();
    }

    private function publishMigration(): void
    {
        $migrations = [];
        foreach ($migrations as $migration) {
            $this->publishes([
                __DIR__ . "/database/migrations/{$migration}" => database_path(
                    "migrations/{$migration}"
                ),
            ], 'LaravelScoreCrop-migrations');
        }
    }

    private function publishView(): void
    {
        $this->publishes([
            __DIR__ . '/resources/views' => resource_path('views/vendor/LaravelScoreCrop'),
        ], 'LaravelScoreCrop-views');
    }

    private function publishAsset(): void
    {
        $this->publishes([], 'LaravelScoreCrop-assets');
    }

    /**
     * Define the routes.
     *
     * @return void
     */
    protected function defineRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");
    }
}