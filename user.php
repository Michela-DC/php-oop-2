<?php

require_once __DIR__. '/credit_card.php';

class User {

    public $name;
    public $surname;
    public $birthdate;
    public $address;
    public $city;
    public $payment_methods;

    function __construct($_name, $_surname, $_birthdate, $_address, $_city, $_payment_methods = []) {

        $this->name = $_name;
        $this->surname = $_surname;
        $this->birthdate = $_birthdate;
        $this->address = $_address;
        $this->city = $_city;
        $this->payment_methods = $_payment_methods;

    }

    public function addCreditCard($card_number, $expiration_date, $cvv) {
       array_push($this->payment_methods, new CreditCard($card_number, $expiration_date, $cvv));
    }

}
