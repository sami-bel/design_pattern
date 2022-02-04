<?php

namespace Structural\Composite;

class JsonTransformer implements TransformerComponent
{
    public function transform(string $type): void
    {
        if ('xml' !== $type) {
            return;
        }

        echo 'transform json'.PHP_EOL;
    }
}
