<?php

namespace msztorc\Appdynamics\Tests;

use Orchestra\Testbench\TestCase;
use msztorc\Appdynamics\AppdynamicsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AppdynamicsServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
