<?php


require_once('Account.php');
require_once('Car.php');
require_once('UberX.php');
require_once('UberPool.php');

$uberx = new UberX("GUI999", new Account ("Guillermo Carrasquilla", "119337793"),
                   "Chevrolet", "Spark");

$uberx->printDataCar();

$uberPool = new UberPool("GUI999", new Account ("Guillermo Carrasquilla", "1193377993"),
                          "Mazda", "3" );
$uberPool->printDataCar(); 

?>