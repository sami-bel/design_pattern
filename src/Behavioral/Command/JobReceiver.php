<?php

namespace Behavioral\Command;

interface JobReceiver
{
    public function run(): void;
    public function stop(): void;
}