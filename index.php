<?php

require_once 'Bicycle.php';
$bike = new Bicycle('blue');
var_dump($bike);
$bike->setCurrentSpeed(15);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h <br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . 'km/h <br>';
echo $bike->brake();

require_once 'Car.php';
$myCar = new Car('red', 5, 'diesel');
var_dump($myCar);

$myCar->setCurrentSpeed(0);
echo $myCar->start();
echo $myCar->forward();
echo $myCar->brake();
