<?php

namespace Structural\Decorator;

abstract class Job
{
    public const TRANSFER_STEP = 'transfer step';
    public const ENCODING_STEP = 'encoding step';

    protected string $id;
    protected string $source;
    protected string $destination;
    protected string $step;

    public function getSource(): string
    {
        return $this->source;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function getStep(): string
    {
        return $this->step;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function setSource(string $source): Job
    {
        $this->source = $source;
        return $this;
    }

    public function setStep(string $step): Job
    {
        $this->step = $step;
        return $this;
    }

    public function setDestination(string $destination): Job
    {
        $this->destination = $destination;
        return $this;
    }
}
