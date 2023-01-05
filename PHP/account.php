<?php
class Account{
    public $id;
    public $name;
    public $document;
    public $email;
    public $password;

    public function __construct($name,$document,$id, $email,$password){
        $this->name = $name;
        $this->document = $document;
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
    }
}