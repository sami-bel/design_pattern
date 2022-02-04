<?php

namespace Creational\Factory;

class PersonalComputer extends Computer
{
	public function __construct(public string $ram, public string $cpu)
    {}

	public function getRam(): string 
	{
		return $this->ram;
	}

	public function getCpu(): string 
	{
		return $this->cpu;
	}
}