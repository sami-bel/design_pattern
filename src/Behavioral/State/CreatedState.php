<?php

namespace Behavioral\State;

class CreatedState implements JobState
{
    public function action(Job $job): void
    {
        echo sprintf('Job %s : created', $job->getType()).PHP_EOL;
    }
}