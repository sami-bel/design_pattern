<?php

namespace Structural\Decorator;

class EncodingJob extends DecoratorJob
{
    public function getStep(): string
    {
        return 'Encoding Video' . PHP_EOL;
    }
}
