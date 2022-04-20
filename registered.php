<?php

require_once __DIR__. '/guest.php';

class Registered extends Guest {

    private $password;

    function __construct($_name, $_surname, $_email, $_address, $_payment_methods = [], $_cart = [], $_total = 0, $_discount_percent = 20, $_discount_applied = 0, $_password = null) {

        parent::__construct($_name, $_surname, $_email, $_address, $_payment_methods, $_cart, $_total, $_discount_percent, $_discount_applied);
        
        $this->password = $_password;

    }

    public function setPassword($_password) {
        $this->password = $_password;
    }
    
    public function getPassword() {
        return $this->password;
    }

    public function discountedPrice($shopping_cart){
        $discount = ($this->totalPrice($shopping_cart) * $this->discount_percent) / 100;
        $price = $this->totalPrice($shopping_cart) - $discount;

        return $price = floatval($price); 
    }

    public function discountApplied($shopping_cart, $price){
        $discount = ($this->totalPrice($shopping_cart) * $this->discount_percent) / 100;
        $discount = number_format($discount, 2);

        return $discount = floatval($discount); 
    }

}
