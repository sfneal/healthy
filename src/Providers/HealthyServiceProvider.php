<?php

namespace Sfneal\Healthy\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Sfneal\Healthy\Controllers\HealthyController;

class HealthyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any Healthy services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config file
        $this->publishes([
            __DIR__.'/../../config/healthy.php' => base_path('config/healthy.php'),
        ], 'config');

        // Map health check paths
        Route::get(config('healthy.route'), HealthyController::class)->name('health');
    }

    /**
     * Register any Healthy services.
     *
     * @return void
     */
    public function register()
    {
        // Load config file
        $this->mergeConfigFrom(__DIR__.'/../../config/healthy.php', 'healthy');
    }
}
