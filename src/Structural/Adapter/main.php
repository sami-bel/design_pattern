<?php

require '../../Autoloader.php';

use Structural\Adapter\Server;
use Structural\Adapter\Printer;
use Structural\Adapter\PrinterAdapter;

$server = new Server(8, 2.4);
$printer = new Printer('color');
$printerAdapter = new PrinterAdapter($printer);


$computerList [] = $server;
$computerList [] = $printerAdapter;

foreach ($computerList as $computer) {
    $computer->getDescription();
}

