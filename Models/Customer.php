<?php

class Customer extends User {
    public $id;
    public $name;
    public $surname;
    public $email;
    public $address;
    public $phone;
    public $creditCard;

    public function __construct($name, $surname, $email, Address $address, $phone, CreditCard $creditCard) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->address = $address;
        $this->phone = $phone;
        $this->creditCard = $creditCard;
        parent::__construct();
        $this->id = parent::getId();
    }
}