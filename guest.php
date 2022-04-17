<?php

require_once __DIR__. '/traits.php';

class Guest {

    use User;

    function __construct($_name, $_surname, $_birthdate, $_email, $_address, $_registered_user = false, $_payment_methods = [], $_cart = [], $_total = 0, $_discount = 0) {

        $this->name = $_name;
        $this->surname = $_surname;
        $this->birthdate = $_birthdate;
        $this->email = $_email;
        $this->address = $_address;
        $this->registered_user = $_registered_user;
        $this->payment_methods = $_payment_methods;
        $this->cart = $_cart;
        $this->total = $_total;
        $this->discount = $_discount;

    }

}
