<?php

namespace Behavioral\state;

interface JobState
{
    public function action(Job $job): void;
}