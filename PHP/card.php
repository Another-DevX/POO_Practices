<?php
require_once('payment.php');

class Card extends Payment {
    public $cardNumber;
    public $cvv;
    public $expiration_date;

    public function __construct($id, $cardNumber, $cvv, $expiration_date){
        parent::__construct($id);
        $this->cardNumber = $cardNumber;
        $this->cvv = $cvv;
        $this->expiration_date = $expiration_date;
    }
}