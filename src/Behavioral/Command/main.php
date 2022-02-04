<?php

require '../../Autoloader.php'; 

use Behavioral\Command\TransferJsonJob;
use Behavioral\Command\RunJobCommand;
use Behavioral\Command\StopJobCommand;
use Behavioral\Command\TransferXmlJob;
use Behavioral\Command\JobInvoker;
use Behavioral\Command\Command;
use Behavioral\Command\JobReceiver;

$jobInvoker = new JobInvoker();

$runJobCommand = getRunJobCommand($transferJobJson = new TransferJsonJob());
$jobInvoker->setCommand($runJobCommand);
$jobInvoker->execute();
sleep(3);
$stopJobCommand = getStopJobCommand($transferJobJson);
$jobInvoker->setCommand($stopJobCommand);
$jobInvoker->execute();


$runJobCommand = getRunJobCommand($transferJobXml = new TransferXmlJob());
$jobInvoker->setCommand($runJobCommand);
$jobInvoker->execute();
sleep(3);
$stopJobCommand = getStopJobCommand($transferJobXml);
$jobInvoker->setCommand($stopJobCommand);
$jobInvoker->execute();

function getRunJobCommand(JobReceiver $transferJob): Command
{
    return new RunJobCommand($transferJob);
}

function getStopJobCommand(JobReceiver $transferJob): Command
{
    return new StopJobCommand($transferJob);
}