<?php

require '../../Autoloader.php';

use Structural\Composite\XmlTransformer;
use Structural\Composite\JsonTransformer;
use Structural\Composite\TransformerComposite;

$xmlTransformer = new XmlTransformer();
$jsonTransformer = new JsonTransformer();

$transformerComposite = new TransformerComposite([$xmlTransformer, $jsonTransformer]);

$type = 'xml';
$transformerComposite->transform($type);

$type = 'json';
$transformerComposite->transform($type);
