<?php

namespace Secomapp\GetResponse\Tests;

use Orchestra\Testbench\TestCase as Testbench;

class TestCase extends Testbench
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
    }


    /**
     * Get LaraPlans package service provider.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    public function getPackageProviders($app)
    {
        return ['Secomapp\GetResponse\GetResponseServiceProvider'];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
//        $app['config']->set('getresponse.apiKey', '42f05e64e67296fb65695f44557a9e7a');
        $app['config']->set('getresponse.apiKey', '42f05e64e67296fb65695f44557a9e7a1');
    }
}