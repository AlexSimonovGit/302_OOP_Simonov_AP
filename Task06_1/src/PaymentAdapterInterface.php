<?php
namespace App;

interface PaymentAdapterInterface
{
    public function collectMoney(float $amount): bool;
}