<?php
require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('account.php');

$uberX =  new UberX("JAO121", new Account("Lucho diaz","192012"),"Mercedes","2016");
$uberX->PrintDataCar();

$uberPool = new UberPool("JSI212", new Account("Enriqueto areas", "1921212"), "Chevrolet", "2010");
$uberPool->PrintDataCar();