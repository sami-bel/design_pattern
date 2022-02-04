<?php

require '../Autoloader.php';

use Attributes\User;

$user = new User("125463948513", "sami");

$toto = new \Attributes\Toto("ktktktk");
$class = new ReflectionClass(User::class);

var_dump($class);
$routeAttributes = $class->getAttributes();

var_dump($routeAttributes);
