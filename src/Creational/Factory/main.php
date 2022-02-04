<?php

require '../../Autoloader.php'; 

use Creational\Factory\ComputerFactory;

$computerFactory = new ComputerFactory();

echo "Create PC => ".$computerFactory->getComputer(ComputerFactory::TYPE_PERSONAL_COMPUTER, "6GB", "2.4GHz")."\n";
echo "Create Server => ".$computerFactory->getComputer(ComputerFactory::TYPE_SERVER, "16GB", "2.9GHz")."\n";