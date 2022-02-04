<?php

namespace Behavioral\Command;

class TransferXmlJob implements JobReceiver
{
    public function run(): void
    {
        echo 'Transfer XML run'.PHP_EOL;
    }

    public function stop(): void
    {
        echo 'Transfer XML stop'.PHP_EOL;
    }
}