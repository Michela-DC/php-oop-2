<?php

require_once __DIR__. '/cart.php';

class Order extends Cart {
    
    public $user;
    public $total;

    function __construct ($_shopping_cart = [], $_user = '', $_total = 0) {

        parent::__construct($_shopping_cart = []);
        $this->user = $_user;
        $this->total = $_total;

    }

}
