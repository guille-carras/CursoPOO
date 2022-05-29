<?php

require_once('Car.php');
class UberBlack extends Car {
    $typeCarAccepted;
    $seatsMaterial;

    public function UberBlack __construct($license, $driver,
        $typeCarAccepted, $seatsMaterial) {
        parent::__construct($license, $driver);
        this->typeCarAccepted = typeCarAccepted;
        this->seatsMaterial = seatsMaterial;
        
    }
}
?>