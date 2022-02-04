<?php

namespace Structural\Composite;

class XmlTransformer implements TransformerComponent
{
    public function transform(string $type): void
    {
        if ('xml' !== $type) {
            return;
        }

        echo 'transform xml'.PHP_EOL;
    }
}
