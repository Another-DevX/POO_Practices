<?php
class Car{
    public $id;
    public $license;
    public $driver;
    public $passengers;

    public function __construct($license, $drivers){
        $this->license = $license;
        $this->driver = $drivers;
    }
    public function PrintDataCar(){
        echo "license: $this->license,
        driver: {$this->driver->name},
        document: {$this->driver->document}"; 
    }
}