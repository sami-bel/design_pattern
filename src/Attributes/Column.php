<?php

namespace Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD|Attribute::TARGET_CLASS)]
class Column
{
    public function __construct(private ?string $namea = null, private ?string $type = null)
    {}

    public function getName(): ?string
    {
        return $this->namea;
    }

    public function getType(): ?string
    {
        return $this->type;
    }
}
