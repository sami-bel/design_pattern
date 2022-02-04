<?php

namespace Structural\Decorator;

abstract class DecoratorJob extends Job
{
    public function __construct(private Job $job)
    {
    }

    public function getJob(): Job
    {
        return $this->job;
    }
}
