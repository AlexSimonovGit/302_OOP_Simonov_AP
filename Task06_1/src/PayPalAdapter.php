<?php
namespace App;

class PayPalAdapter implements PaymentAdapterInterface
{
    private $payPal;

    public function __construct(PayPal $payPal)
    {
        $this->payPal = $payPal;
    }

    public function collectMoney(float $amount): bool
    {
        $result = $this->payPal->authorizeTransaction($amount);
        return $result === 'PayPal Success!';
    }
}