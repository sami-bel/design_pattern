<?php

namespace Behavioral\Strategy;

interface PayMethod
{
    public function pay(int $amount): void;
}