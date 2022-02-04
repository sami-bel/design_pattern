<?php

namespace Creational\AbstractFactory;

interface ComputerAbstractFactory
{
    public function createComputer(): Computer;
}