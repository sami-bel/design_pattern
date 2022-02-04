<?php

namespace Structural\Adapter;

class Printer
{
    public function __construct(private string $type)
    {
    }

    public function getType(): string
    {
        return $this->type;
    }
}
