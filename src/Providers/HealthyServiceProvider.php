<?php


namespace Sfneal\Healthy\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

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
            __DIR__.'/../config/healthy.php' => base_path('config/healthy.php'),
        ], 'config');

        // Map health check paths
        Route::middleware('web')->group(base_path('routes/health.php'));
    }

    /**
     * Register any Healthy services.
     *
     * @return void
     */
    public function register()
    {
        // Load config file
        $this->mergeConfigFrom(__DIR__.'/../config/healthy.php', 'healthy');
    }
}
