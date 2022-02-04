<?php

namespace Creational\AbstractFactory;

class PersonalComputerFactory implements ComputerAbstractFactory
{
    public function __construct(private string $ram, private string $cpu)
    {}

    public function createComputer(): Computer
    {
        return new PersonalComputer($this->ram, $this->cpu);
    }
}