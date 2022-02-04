<?php

namespace Creational\Factory;

class ComputerFactory
{
	public const TYPE_PERSONAL_COMPUTER= 'personal_computer';

	public const TYPE_SERVER = 'server';

	public function getComputer(string $type, string $ram, string $cpu): Computer
	{
        if (self::TYPE_PERSONAL_COMPUTER === $type) {
            return new PersonalComputer($ram, $cpu);
        }

        if (self::TYPE_SERVER === $type) {
            return new Server($ram, $cpu);
        }

        throw new \RuntimeException(sprintf('%s computer type not found', $type));
    }
}