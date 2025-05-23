<?php
namespace App;

class PayPal
{
    private $email;
    private $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function authorizeTransaction(float $amount): string
    {
        return 'PayPal Success!';
    }
}