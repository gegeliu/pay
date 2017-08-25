<?php

namespace Yansongda\Pay\Tests\Gateways\Alipay;

use Mockery;
use Yansongda\Pay\Tests\TestCase;
use Yansongda\Pay\Gateways\AppGateway;

class AppGatewayTest extends TestCase
{
    public function testPay()
    {
        $config = [
            'app_id' => 'mock-app_id',
            'ali_public_key' => 'mock-public_key',
            'private_key' => 'mock-private_key',
            'return_url' => 'http://mock.dev/return',
            'notify_url' => 'http://mock.dev/notify',
        ];

        $gateway = Mockery::mock('AppGateway[pay]', [$config]);
        $gateway->withAnyArgs();

    }
}
