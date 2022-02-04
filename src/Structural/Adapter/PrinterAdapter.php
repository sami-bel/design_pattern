<?php

namespace Structural\Adapter;

class PrinterAdapter implements Computer
{
    public function __construct(private Printer $printer)
    {
    }

    public function getDescription(): void
    {
        echo 'Printer Type : ' . $this->printer->getType() . PHP_EOL;
    }
}
