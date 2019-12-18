<?php


namespace onethirtyone\docparser\Tests;

use Orchestra\Testbench\Testcase as Orchestra;
use onethirtyone\docparser\DocparserProvider;

class TestCase extends Orchestra
{

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            DocparserProvider::class,
        ];
    }

}