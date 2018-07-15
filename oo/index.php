<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once('Car.php');
require_once('Motorcycle.php');

$ferrari = new Car("Ferrari", "Black");

$ferrari->engine = 300;
$ferrari->setDoors(4);

echo $ferrari->getDoors();

$moto = new Motorcycle("Harley", "black");

echo $moto->color; 