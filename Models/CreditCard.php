<?php

class CreditCard {
    public $number;
    public $expMonth;
    public $expYear;
    public $cvn;
    public $cardHolderName;

    public function __construct($number, $expMonth, $expYear, $cvn, $cardHolderName) {
        $this->number = $number;
        $this->expMonth = $expMonth;
        $this->expYear = $expYear;
        $this->cvn = $cvn;
        $this->cardHolderName = $cardHolderName;
    }
}