<?php

namespace Creational\Factory;

abstract class Computer
{
	abstract public function getRam();

	abstract public function getCpu();

	public function __toString(): string 
	{
		return 'RAM : ' .$this->getRam() . ', CPU : ' . $this->getCpu();
	}
}