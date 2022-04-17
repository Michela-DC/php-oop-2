<?php

trait User { 

    public $name;
    public $surname;
    protected $birthdate;
    protected $email;
    protected $address;
    public $registered_user;
    private $payment_methods;
    public $cart;
    public $total;
    public $discount;

    public function addCreditCard($card_number, $expiration_date, $cvv) {
        array_push($this->payment_methods, new CreditCard($card_number, $expiration_date, $cvv));
    }

    public function getFullName() {
        return $this->name . ' ' . $this->surname;
    }

    public function totalPrice ($shopping_cart) {
        $price = 0;
        $percentage = 20;
        $discount;

        foreach($shopping_cart as $item) {

            if ($item !== 0){
                
                foreach($item as $el){
                    $price = $price + $el->price; 
                }
            }
        }

        if($this->registered_user == true){

            $discount = ($price * $percentage) / 100;
            $price = $price - $discount;

        }

        return $price = number_format($price, 2);;
    }

    public function appliedDiscount($price) {
        $percentage = 20;
        $discount = 0;

        $discount = ($price * $percentage) / 100;

        return number_format($discount, 2);;

    }
    
}
