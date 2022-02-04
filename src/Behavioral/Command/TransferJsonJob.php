<?php

namespace Behavioral\Command;

class TransferJsonJob implements JobReceiver
{
    public function run(): void
    {
        echo 'Transfer Json run'.PHP_EOL;
    }

    public function stop(): void
    {
        echo 'Transfer Json stop'.PHP_EOL;
    }
}