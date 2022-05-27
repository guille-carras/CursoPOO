<?php

require_once (Account.php)

class Car {
    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function __construct($license, Account $driver, $passengers)
    {
        $this->license = $license;
        $this->driver = $driver:
        $this->passengers =$passengers;
    }

    public function printDataCar()
    {
        echo "license: " .$thsi->license . " Driver: " . $this->driver->name;
    }
}

?>