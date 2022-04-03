<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

$sayHello = new Hello();

echo $sayHello->talk();