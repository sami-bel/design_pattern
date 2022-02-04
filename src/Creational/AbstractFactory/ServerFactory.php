<?php

namespace Creational\AbstractFactory;

class ServerFactory implements ComputerAbstractFactory
{
    public function __construct(private string $ram, private string $cpu)
    {}

    public function createComputer(): Computer
    {
        return new Server($this->ram, $this->cpu);
    }
}