<?php
namespace App\Tests;

use App\CreditCard;
use App\CreditCardAdapter;
use PHPUnit\Framework\TestCase;

class CreditCardAdapterTest extends TestCase
{
    public function testCollectMoneySuccess()
    {
        $creditCardMock = $this->createMock(CreditCard::class);
        $creditCardMock->method('transfer')->willReturn('Authorization code: 12345');
        $adapter = new CreditCardAdapter($creditCardMock);
        $this->assertTrue($adapter->collectMoney(100));
    }

    public function testCollectMoneyFailure()
    {
        $creditCardMock = $this->createMock(CreditCard::class);
        $creditCardMock->method('transfer')->willReturn('Error: Insufficient funds');
        $adapter = new CreditCardAdapter($creditCardMock);
        $this->assertFalse($adapter->collectMoney(100));
    }
}