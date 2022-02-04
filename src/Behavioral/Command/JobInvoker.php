<?php

namespace Behavioral\Command;

class JobInvoker
{
    private ?Command $command = null;

    public function execute(): void
    {
        if (null === $this->command) {
            throw new \RuntimeException('Command not found');
        }
        $this->command->execute();
    }

    public function setCommand(Command $command): void
    {
        $this->command = $command;
    }
}