<?php
require_once('car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __construct($license, $drivers,$typeCarAccepted, $seatsMaterial){
        parent::__construct($license, $drivers);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
    
}