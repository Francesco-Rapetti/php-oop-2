<?php

class Address {
    public $street;
    public $city;
    public $state;
    public $zip;

    public function __construct($street, $city, $state, $zip) {
        $this->street = $street;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }
}