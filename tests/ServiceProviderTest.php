<?php

namespace PrestTEC\Tests\Whmcs;

use PrestTEC\Whmcs\WhmcsManager;

class ServiceProviderTest extends AbstractTestCase
{
    public function testInstantiated()
    {
        $instance = $this->app->make('whmcs');

        $this->assertInstanceOf(WhmcsManager::class, $instance);
    }
}
