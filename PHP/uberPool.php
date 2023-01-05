<?php
require_once('car.php');
class UberPool extends Car {
    public $brand;
    public $model;

    public function __construct($license, $drivers,$brand, $model){
        parent::__construct($license, $drivers);
        $this->brand = $brand;
        $this->model = $model;
    }
    
}