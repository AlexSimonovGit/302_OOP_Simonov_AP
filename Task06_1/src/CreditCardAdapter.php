<?php
namespace App;

class CreditCardAdapter implements PaymentAdapterInterface
{
    private $creditCard;

    public function __construct(CreditCard $creditCard)
    {
        $this->creditCard = $creditCard;
    }

    public function collectMoney(float $amount): bool
    {
        $result = $this->creditCard->transfer($amount);
        return strpos($result, 'Authorization code:') !== false;
    }
}