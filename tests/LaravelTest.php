<?php

namespace Sfneal\Healthy\Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase;
use Sfneal\Healthy\Providers\HealthyServiceProvider;

class LaravelTest extends TestCase
{
    /**
     * Register package service providers.
     *
     * @param Application $app
     * @return array|string
     */
    protected function getPackageProviders($app)
    {
        return HealthyServiceProvider::class;
    }

    /** @test */
    public function the_route_can_be_accessed()
    {
        // Get request the route
        $this->get(config('healthy.route'))
            ->assertSeeText('OK')
            ->assertHeader('Content-Type', 'text/plain; charset=UTF-8')
            ->assertStatus(200);
    }
}
