<?php
namespace App\Tests;

use App\PayPal;
use App\PayPalAdapter;
use PHPUnit\Framework\TestCase;

class PayPalAdapterTest extends TestCase
{
    public function testCollectMoneySuccess()
    {
        $payPalMock = $this->createMock(PayPal::class);
        $payPalMock->method('authorizeTransaction')->willReturn('PayPal Success!');
        $adapter = new PayPalAdapter($payPalMock);
        $this->assertTrue($adapter->collectMoney(100));
    }

    public function testCollectMoneyFailure()
    {
        $payPalMock = $this->createMock(PayPal::class);
        $payPalMock->method('authorizeTransaction')->willReturn('PayPal Error!');
        $adapter = new PayPalAdapter($payPalMock);
        $this->assertFalse($adapter->collectMoney(100));
    }
}