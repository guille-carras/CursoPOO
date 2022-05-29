<?php


require_once('Account.php');
require_once('Car.php');
require_once('UberX.php');

$uberx = new UberX("GUI999", new Account("Guillermo Carrasquilla", "119337793"),
                   "Chevrolet", "Spark");

$uberx->printDataCar();


?>