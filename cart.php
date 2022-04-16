<?php

class Cart {
    
    public $shopping_cart;

    function __construct ($_shopping_cart = []) {

        $this->shopping_cart = $_shopping_cart;

    }

    public function addToCart ($product) {
        array_push($this->shopping_cart, $product);
    }

}