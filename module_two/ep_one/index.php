<?php

// require_once __DIR__ . "/app/Bike.php";
// require_once __DIR__ . "/app/Bus.php";
// require_once __DIR__ . "/app/Car.php";

use Kamrul\Bike ;
use Kamrul\Bus ;
use Kamrul\Car ;

require_once __DIR__ . "/vendor/autoload.php";


$car = new Bike();
$car = new Bus();
$car = new Car();

sayHello();