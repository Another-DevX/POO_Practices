<?php
require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('driver.php');

$uberX =  new UberX("JAO121", new Driver("Lucho diaz","192012",1212,"joasjs@laksld.com","21jk1j2"),"Mercedes","2016");
$uberX->PrintDataCar();

$uberPool = new UberPool("JSI212", new Driver("Enriqueto areas", "1921212",132322,"josadasdsjs@lsdasksld.com","21jk1jasd2"), "Chevrolet", "2010");
$uberPool->PrintDataCar();