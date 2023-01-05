<?php
require_once('car.php');
require_once('account.php');

$car =  new Car("JAO121", new Account("Lucho diaz","192012"));
$car->PrintDataCar();