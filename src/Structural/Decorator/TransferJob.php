<?php

namespace Structural\Decorator;

class TransferJob extends DecoratorJob
{
    public function getStep(): string
    {
        return 'transfer From : ' . $this->getJob()->getSource() . ' To ' . $this->getJob()->getDestination() . PHP_EOL;
    }
}
