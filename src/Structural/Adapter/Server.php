<?php

namespace Structural\Adapter;

class Server implements Computer
{
    public function __construct(private int $ram, private int $cpu)
    {
    }

    public function getDescription(): void
    {
        echo 'Server => RAM : '. $this->ram . ', CPU : ' . $this->cpu . PHP_EOL;
    }
}
