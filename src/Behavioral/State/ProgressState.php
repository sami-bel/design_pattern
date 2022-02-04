<?php

namespace Behavioral\State;

class ProgressState implements JobState
{
    public function action(Job $job): void
    {
        echo sprintf('Job %s : progress', $job->getType()).PHP_EOL;
    }
}