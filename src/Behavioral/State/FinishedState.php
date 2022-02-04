<?php

namespace Behavioral\State;

class FinishedState implements JobState
{
    public function action(Job $job): void
    {
        echo sprintf('Job %s : finished', $job->getType()).PHP_EOL;
    }
}