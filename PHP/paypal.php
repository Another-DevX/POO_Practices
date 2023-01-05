<?php
require_once('payment.php');

class Paypal extends Payment {
    public $mail;

    public function __construct($id, $mail){
        parent::__construct($id);
        $this->mail = $mail;
    }
}