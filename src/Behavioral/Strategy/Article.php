<?php

namespace Behavioral\Strategy;

class Article
{
    public function __construct(private string $name, private int $price)
    {}

    public function pay(PayMethod $method): void
    {
        echo 'article : '. $this->name . "\n";
        $method->pay($this->price);
    }
}
