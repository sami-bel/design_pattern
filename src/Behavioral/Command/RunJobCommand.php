<?php

namespace Behavioral\Command;

class RunJobCommand implements Command
{
    public function __construct(private JobReceiver $jobReceiver)
    {}
    public function execute(): void
    {
        $this->jobReceiver->run();
    }
}