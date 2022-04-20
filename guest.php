<?php

class Guest {

    public $name;
    public $surname;
    protected $email;
    protected $address;
    public $payment_methods;
    public $cart;
    public $total;
    public $discount_percent;
    public $discount_applied;

    function __construct($_name, $_surname, $_email, $_address, $_payment_methods = [], $_cart = [], $_total = 0, $_discount_percent = 0, $_discount_applied = 0) {

        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->address = $_address;
        $this->payment_methods = $_payment_methods;
        $this->cart = $_cart;
        $this->total = $_total;
        $this->discount_percent = $_discount_percent;
        $this->discount_applied = $_discount_applied;

    }

    public function addCreditCard($card) {
        array_push($this->payment_methods, $card);
    }

    public function getFullName() {
        return $this->name . ' ' . $this->surname;
    }

    public function totalPrice ($shopping_cart) {
        $price = 0;
        $discount;

        foreach($shopping_cart as $item) {

            if ($item !== 0){
                
                foreach($item as $el){
                    $price = $price + $el->price; 
                }
            }
        }

        return $price = floatval($price); 
        //number_format mi ritorna una stringa quindi uso floatval per farlo diventare un float
    }
}
