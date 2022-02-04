<?php

namespace Behavioral\state;

class Job
{
    private JobState $state;

    public function __construct(private string $type)
    {
    }

    public function setState(JobState $jobState): self
    {
        $this->state = $jobState;

        return $this;
    }

    public function action(): self
    {
        $this->state->action($this);

        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }
}