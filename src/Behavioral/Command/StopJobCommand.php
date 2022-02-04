<?php

namespace Behavioral\Command;

class StopJobCommand implements Command
{
    public function __construct(private JobReceiver $jobReceiver)
    {}
    public function execute(): void
    {
        $this->jobReceiver->stop();
    }
}