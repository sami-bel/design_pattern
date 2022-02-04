<?php

namespace Behavioral\Strategy;

class PayPalStrategy implements PayMethod
{
    public function pay(int $amount): void
    {
        echo $amount . '$ payed by payPal' . "\n";
    }
}