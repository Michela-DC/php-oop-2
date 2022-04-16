<?php

class CreditCard {

    private $card_number;
    private $expiration_date;
    private $cvv;

    function __construct($_card_number, $_expiration_date, $_cvv) {
        
        $this -> setCardNumber($_card_number);
        $this -> setExpiration($_expiration_date);
        $this -> setCvv($_cvv);
    }

    // Card number -------

    public function setCardNumber($_card_number) {

        if(is_numeric($_card_number)){
            $this->card_number = $_card_number;

        }else{
            echo 'Il numero della carta NON è valido!';
        }
    }
    
    public function getCardNumber() {
        return $this->card_number;
    }

    // Expiration date ------

    public function setExpiration($_expiration_date) {
        $today = date("m/y");

        if($today < $_expiration_date){
            $this->expiration_date = $_expiration_date;
            
        }else{
            echo 'La carta di credito è scaduta!';
        }
    }
    
    public function getExpiration() {
        return $this->expiration_date;
    }

    // CVV ---------------------

    public function setCvv($_cvv) {
        if(is_numeric($_cvv) && strlen($_cvv) == 3){
            $this->cvv = $_cvv;

        }else{
            echo 'Il CVV della carta NON è valido!';
        }
    }
    
    public function getCvv() {
        return $this->cvv;
    }

}