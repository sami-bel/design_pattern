<?php

namespace Behavioral\Strategy;

class CreditCardStrategy implements PayMethod
{
    public function pay(int $amount): void
    {
        echo $amount . '$ payed by credit card' . "\n";
    }
}