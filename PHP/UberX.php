<?php

class UberX extends Car {
    public $brand;
    public $model;

    public function __construct($license, $driver, $brand, $model){
        parent:: __construct($license, $driver); # Es el super de PHP, como en Java
        $this->license = $license;
        $this->driver = $driver;
        $this->brand = $brand;
        $this->model = $model;
    }

}

?>