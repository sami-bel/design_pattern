<?php

namespace Structural\Composite;

interface TransformerComponent
{
    public function transform(string $type): void;
}
