<?php

require_once 'Director.php';
require_once 'House.php';
require_once 'HouseBuilder.php';
require_once 'RichHouse.php';
require_once 'RichHouseBuilder.php';
require_once 'PoorHouseBuilder.php';

$houseBuilder = new Director();
$richHouse  = new RichHouseBuilder();
$poorHouse  = new PoorHouseBuilder();

$houseBuilder->setHouseBuilder($poorHouse);
$houseBuilder->constructHouse();
$house = $houseBuilder->getHouse();


var_dump($house);