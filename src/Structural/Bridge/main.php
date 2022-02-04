<?php

require '../../Autoloader.php';

use Structural\Bridge\ApiUserProvider;
use Structural\Bridge\DBUserProvider;
use Structural\Bridge\Dev;


$apiUserProvider = new ApiUserProvider();
$dbUserProvider = new DBUserProvider();

// 1 . api Provider
$user = new Dev($apiUserProvider);
$user->getUsers();

sleep(2);
// 2 . db provider

$user = new Dev($dbUserProvider);
$user->getUsers();
