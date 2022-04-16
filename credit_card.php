<?php

class Credit_Card {

    private $card_number;
    private $expiration_date;
    private $cvv;

    function __construct($_card_number, $_expiration_date, $_cvv) {
        $this->card_number = $_card_number;
        $this->expiration_date = $_expiration_date;
        $this->cvv = $_cvv;
    }

    public function setCardNumber($card_number) {
        $this->card_number = $_card_number;
    }
    
    public function getCardNumber() {
        return $this->card_number;
    }

    public function setExpiration($expiration_date) {
        $this->expiration_date = $_expiration_date;
    }
    
    public function getExpiration() {
        return $this->expiration_date;
    }

    public function setCvv($cvv) {
        $this->cvv = $_cvv;
    }
    
    public function getCvv() {
        return $this->cvv;
    }

}