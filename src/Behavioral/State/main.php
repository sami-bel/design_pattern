<?php

require '../../Autoloader.php'; 

use Behavioral\State\Job;
use Behavioral\State\CreatedState;
use Behavioral\State\WaitingState;
use Behavioral\State\FinishedState;
use Behavioral\State\ProgressState;


$job = new Job("Transfer");

$job->setState(new CreatedState());
$job->action();

sleep(3);

$job->setState(new WaitingState());
$job->action();

sleep(3);

$job->setState(new ProgressState());
$job->action();

sleep(3);
$job->setState(new FinishedState());
$job->action();