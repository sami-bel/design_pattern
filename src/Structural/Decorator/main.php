<?php

require '../../Autoloader.php';

use \Structural\Decorator\VideoJob;
use \Structural\Decorator\TransferJob;
use \Structural\Decorator\EncodingJob;

$videoJob  = new VideoJob();

$videoJob->setSource('local');
$videoJob->setDestination('encoding server');

$videoJob = new TransferJob($videoJob);
echo $videoJob->getStep();

sleep(2);

$videoJob = new EncodingJob($videoJob);
echo $videoJob->getStep();

sleep(2);


$videoJob->setSource('encoding server');
$videoJob->setDestination('local');

$videoJob = new TransferJob($videoJob);

echo $videoJob->getStep();
