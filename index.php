<?php

require_once 'Bicycle.php';
$bicycle = new Bicycle('blue', 1);
var_dump($bicycle);
echo $bicycle->forward();

require_once 'Car.php';
var_dump(Car::ALLOWED_ENERGIES);
$myCar = new Car('red', 5, 'diesel');
echo $myCar->forward();
var_dump($myCar);

require_once 'Truck.php';
$myLovelyTruck = new Truck('blue', 2, 'fuel', 15);
var_dump($myLovelyTruck);

echo $myLovelyTruck->forward();
echo $myLovelyTruck->setStockCapacity(2);
var_dump($myLovelyTruck);
echo $myLovelyTruck->isFull() . '<br>';

$myLovelyTruck->setStockCapacity(0);
echo $myLovelyTruck->isFull();