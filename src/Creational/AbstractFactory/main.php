<?php

require '../../Autoloader.php'; 

use Creational\AbstractFactory\ComputerFactory;
use Creational\AbstractFactory\PersonalComputerFactory;
use Creational\AbstractFactory\ServerFactory;
$computerFactory = new ComputerFactory();

echo "Create PC => ".$computerFactory->getComputer(new PersonalComputerFactory('6GB', '2.4GHz'))."\n";
echo "Create Server => ".$computerFactory->getComputer(new ServerFactory('6GB', '2.4GHz'))."\n";
