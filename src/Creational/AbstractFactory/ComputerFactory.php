<?php

namespace Creational\AbstractFactory;

class ComputerFactory
{
	public function getComputer(ComputerAbstractFactory $factory): Computer
	{
	    return $factory->createComputer();
    }
}