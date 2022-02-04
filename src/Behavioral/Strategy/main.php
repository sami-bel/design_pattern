<?php

require '../../Autoloader.php'; 

use Behavioral\Strategy\Article;
use Behavioral\Strategy\CreditCardStrategy;
use Behavioral\Strategy\PayPalStrategy;

$article1 = new Article("article 1", 20);
$article1->pay(new CreditCardStrategy());


$article2 = new Article("article 2", 40);
$article2->pay(new PayPalStrategy());