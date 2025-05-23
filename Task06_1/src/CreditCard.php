<?php
namespace App;

class CreditCard
{
    private $cardNumber;
    private $expiryDate;

    public function __construct(int $cardNumber, string $expiryDate)
    {
        $this->cardNumber = $cardNumber;
        $this->expiryDate = $expiryDate;
    }

    public function transfer(float $amount): string
    {
        return 'Authorization code: 12345';
    }
}