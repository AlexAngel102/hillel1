<?php

require 'Bridge.php';
require 'Transport.php';

$vehile1 = new Transport(3500, 2500);
$vehile2 = new Transport(4200, 3200);

$bridge = new Bridge();

var_dump($bridge->canTheCarGo($vehile1));

var_dump($bridge->canTheCarGo($vehile2));