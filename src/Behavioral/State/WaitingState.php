<?php

namespace Behavioral\State;

class WaitingState implements JobState
{
    public function action(Job $job): void
    {
        echo sprintf('Job %s : waiting', $job->getType()).PHP_EOL;
    }
}