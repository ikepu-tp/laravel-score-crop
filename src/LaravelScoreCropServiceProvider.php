<?php

namespace ikepu_tp\LaravelScoreCrop;

use Illuminate\Support\ServiceProvider;

class LaravelScoreCropServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (!$this->app->runningInConsole()) return;
        $this->publishes([
            __DIR__ . '/config/score-crop.php' => base_path('config/score-crop.php'),
        ], "laravel-score-crop-config");
    }
}