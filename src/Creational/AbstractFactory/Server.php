<?php

namespace Creational\AbstractFactory;

class Server extends Computer
{
	public function __construct(private string $ram, private string $cpu)
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